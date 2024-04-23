<?php
    #Preflight Check for making sure this can be used when the game was hosted different
    if(isset($_SERVER['HTTP_ORIGIN'])){
        header("Access-Control-Allow-Origin: *"); #Allow all external connections
        header("Access-Control-Max-Age: 60"); #Keep connections open for 1 minute

        #check if a site is requesting access to the site:
        if($_SERVER["REQUEST_METHOD"] === "OPTIONS"){
            header("Access-Control-Allow-Methods: POST, OPTIONS"); # Only allow these kinds of connections
            header("Access-Control-Allow-Headers: Authorization, Content-Type, Accept, Origin, cache-control");
            #"Access-Control-Allow-Headers: Authorization, Content-Type, Accept, Origin, cache-control"
            http_response_code(200); #Report that they are good to make request now
            die; #Quit here until they send a followup!
        }
    }

    #Prevent anything other than POST request to go pas this point:
    if($_SERVER['REQUEST_METHOD'] !== "POST"){
        http_response_code(405); #Report that they were denied access
        die;
    }


    #Script Reference came by Binsk on https://www.bitchute.com/video/EgT0s0nfixIi/

    function print_response($dictionary = [], $error = "none"){
        $string = "";

        #Convert dictionary to JSON string:
        $string = "{\"error\" : \"$error\",
                    \"command\" : \"$_REQUEST[command]\",
                    \"response\" : ". json_encode($dictionary)."}";

        #print JSON to Godot
        echo $string;
    }

    #Make sure command is sent properly:
    if (!isset($_REQUEST['command']) or $_REQUEST['command'] === null){
        #print_response([], "missing_command");
        echo"{\"error\" : \"missing_command\", \"response\" : {}}";
        die;
    }
    #Make sure our data is sent, even if empty:
    if (!isset($_REQUEST['data']) or $_REQUEST['data'] === null){
        print_response([], "missing_data");
        die;
    }

    #Check that the user has permission to make a request and that
    #the request has not been tampered with:
    function verify_nonce($pdo, $secret = "CapstoneProjectGame"){
        #Make sure they sent over a Cnonce:
        if(!isset($_SERVER['HTTP_CNONCE'])){
            print_response([], "invalid_nonce");
            return false;
        }

        #Make a request to pull the nonce from the server:
        $template = "SELECT nonce FROM `nonces` WHERE ip_address = :ip";
        $sth = $pdo -> prepare($template);
        $sth -> execute(["ip" => $_SERVER['REMOTE_ADDR']]);
        $data = $sth -> fetchAll(PDO::FETCH_ASSOC);

        #Check that there was a nonce for this user on the server:
        if(!isset($data) or sizeof($data) <= 0){
            print_response([], "server_missing_nonce");
            return false;
        }

        #DELETE the nonce off the server. Each is a one-use key:
        $sth = $pdo -> prepare("DELETE FROM `nonces` WHERE ip_address = :ip");
        $sth -> execute(["ip" => $_SERVER['REMOTE_ADDR']]);

        #Check the nonce hash to make sure it's valid
        $server_nonce = $data[0]['nonce'];

        if (hash('sha256', $server_nonce . $_SERVER['HTTP_CNONCE'] . file_get_contents("php://input") . $secret) != $_SERVER["HTTP_HASH"]){
            print_response([], "invalid_nonce_or_hash");
            return false;
        }
        return true;
    }

    #Set connection properties to database:
    $sql_host = "127.0.0.1";    #Where database is located
    $sql_db = "u284192868_learn2code";      #Database Name ## Change on Final Implementation
    $sql_username = "u284192868_learn2code";     #Login username on DB
    $sql_password = "Capstonegroup1";         #Login password on DB

    #Set up our data in a format that PDO understands:
    $dsn = "mysql:dbname=$sql_db;host=$sql_host;charset=utf8mb4;port=3306";
    $pdo = null;
    
    #connection Attempt
    try {
        $pdo = new PDO($dsn,$sql_username,$sql_password);
    } catch (\PDOException $e) {
        print_response([], "db_login_error");
        die;
    }

    #Convert Godot json string into a dictionary:
    $json = json_decode($_REQUEST['data'], true);

    #Check that the Json was valid:
    if($json === null){
        print_response([], "invalid_json");
        die;
    }

    #Execute Godot commands:
    switch ($_REQUEST['command']){

        #Generate a single-use nonce for our user and return it to Godot:
        case "get_nonce":
            #Generate random bytes that we can hash:
            $bytes = random_bytes(32);
            $nonce = hash('sha256', $bytes);

            #SQL Template:
            $template = "INSERT INTO `nonces` (ip_address, nonce) VALUES (:ip, :nonce) 
            ON DUPLICATE KEY UPDATE nonce = :nonce_update";

            #Prepare and send via PDO:
            $sth = $pdo -> prepare($template);
            $sth -> execute(["ip" => $_SERVER["REMOTE_ADDR"], "nonce" => $nonce, "nonce_update" => $nonce]);

            #Send the nonce back to Godot:
            print_response(["nonce" => $nonce]);
            
            
            die;
        break;
        
        #GET ACTIVE ACCOUNT
        case "get_user_ID":
            session_start();
	        if (isset($_SESSION['L2C_id'])){
		        
                #print_response(["playerName" => $_SESSION["L2C_id"]]);

                #$template = "SELECT * FROM `cleartime`";

                $template = "SELECT `playerID`, `progress`, CONCAT(`fname`, ' ', `lname`)`playerName`
                            FROM `cleartime` 
                            LEFT JOIN `users` ON `cleartime`.`playerID` = `users`.`id`
                            WHERE `playerID` = :id ";
                
                $sth = $pdo -> prepare($template);
                $sth -> execute(["id" => $_SESSION['L2C_id'] ]);

                #Grab all the resulting data from the request
                $data = $sth -> fetchAll(PDO::FETCH_ASSOC);
                
                #Add the size of result to Godot Structure
                $data["size"] = sizeof($data);
                if ($data["size"] == 0){
                    $data["session_id"] = $_SESSION['L2C_id'];
                }
                
                print_response($data);
	        }else{
		        print_response(); #Do Nothing because the game will detect that there is no UserID logged in
	        }
            break;
        
        case "add_new_player":
            $player_ID = $json['playerID'];

            #Form SQL request string:
            $template = "INSERT INTO `cleartime` (playerID) VALUES(:playerID)";

            #Prep and send request to DB
            $sth = $pdo -> prepare($template);
            $sth -> execute(["playerID" => $player_ID]);

            #Print back empty response saying there was no issue:
            print_response();

            break;
        
        case "update_Progress":

            $template = "UPDATE `cleartime` SET `progress` = :levelnumber WHERE `playerID` = :id";
            $sth = $pdo -> prepare($template);
            $sth -> execute(["levelnumber" => $json['levelnumber'], "id" => $json['player_ID']]);
            
            print_response();
            
            break;
        
        #Get Score to Table
        case "get_level_1_ClearTime":

            #Check if we had a valid nonce: ##May want to comment this part for web Debugging
            if(!verify_nonce($pdo)){
                die;
            }

            #Determine which range of scores we want:
            $score_offset = 0;
            $score_range = 10;

            #check if Godot set some preferences and adjust accordingly
            if (isset($json['score_offset'])){
                $score_offset = max(0,(int) $json['score_offset']);
            }
            if (isset($json['score_number'])){
                $score_range = max(1,(int) $json['score_number']);
            }

            #Form our SQL request template:
            $template = "SELECT `playerID`, CONCAT(`fname`, ' ', `lname`)`playerName`, `Level_1`
            FROM `cleartime` 
            LEFT JOIN `users` ON `cleartime`.`playerID` = `users`.`id`
            ORDER BY ISNULL(Level_1), Level_1 ASC
            LIMIT :number OFFSET :offset";
            
            #Prep and send the actual request to DB
            $sth = $pdo -> prepare($template);
            #Bind Offset and Range Values to INT not String
            $sth -> bindValue("offset", $score_offset, PDO::PARAM_INT);
            $sth -> bindValue("number", $score_range, PDO::PARAM_INT);
            $sth -> execute();

            #Grab all the resulting data from the request:
            $data = $sth -> fetchALL(PDO::FETCH_ASSOC);

            #Add the size of our result to the Godot Structure:
            $data["size"] = sizeof($data);

            print_response($data);

            die;
        break;
        
        case "get_level_2_ClearTime":

            #Check if we had a valid nonce: ##May want to comment this part for web Debugging
            if(!verify_nonce($pdo)){
                die;
            }

            #Determine which range of scores we want:
            $score_offset = 0;
            $score_range = 10;

            #check if Godot set some preferences and adjust accordingly
            if (isset($json['score_offset'])){
                $score_offset = max(0,(int) $json['score_offset']);
            }
            if (isset($json['score_number'])){
                $score_range = max(1,(int) $json['score_number']);
            }

            #Form our SQL request template:
            $template = "SELECT `playerID`, CONCAT(`fname`, ' ', `lname`)`playerName`, `Level_2`
            FROM `cleartime` 
            LEFT JOIN `users` ON `cleartime`.`playerID` = `users`.`id`
            ORDER BY ISNULL(Level_2), Level_2 ASC
            LIMIT :number OFFSET :offset";
            
            #Prep and send the actual request to DB
            $sth = $pdo -> prepare($template);
            #Bind Offset and Range Values to INT not String
            $sth -> bindValue("offset", $score_offset, PDO::PARAM_INT);
            $sth -> bindValue("number", $score_range, PDO::PARAM_INT);
            $sth -> execute();

            #Grab all the resulting data from the request:
            $data = $sth -> fetchALL(PDO::FETCH_ASSOC);

            #Add the size of our result to the Godot Structure:
            $data["size"] = sizeof($data);

            print_response($data);

            die;
        break;
        
        case "get_level_3_ClearTime":

            #Check if we had a valid nonce: ##May want to comment this part for web Debugging
            if(!verify_nonce($pdo)){
                die;
            }

            #Determine which range of scores we want:
            $score_offset = 0;
            $score_range = 10;

            #check if Godot set some preferences and adjust accordingly
            if (isset($json['score_offset'])){
                $score_offset = max(0,(int) $json['score_offset']);
            }
            if (isset($json['score_number'])){
                $score_range = max(1,(int) $json['score_number']);
            }

            #Form our SQL request template:
            $template = "SELECT `playerID`, CONCAT(`fname`, ' ', `lname`)`playerName`, `Level_3`
            FROM `cleartime` 
            LEFT JOIN `users` ON `cleartime`.`playerID` = `users`.`id`
            ORDER BY ISNULL(Level_3), Level_3 ASC
            LIMIT :number OFFSET :offset";
            
            #Prep and send the actual request to DB
            $sth = $pdo -> prepare($template);
            #Bind Offset and Range Values to INT not String
            $sth -> bindValue("offset", $score_offset, PDO::PARAM_INT);
            $sth -> bindValue("number", $score_range, PDO::PARAM_INT);
            $sth -> execute();

            #Grab all the resulting data from the request:
            $data = $sth -> fetchALL(PDO::FETCH_ASSOC);

            #Add the size of our result to the Godot Structure:
            $data["size"] = sizeof($data);

            print_response($data);

            die;
        break;
        
        case "get_level_4_ClearTime":

            #Check if we had a valid nonce: ##May want to comment this part for web Debugging
            if(!verify_nonce($pdo)){
                die;
            }

            #Determine which range of scores we want:
            $score_offset = 0;
            $score_range = 10;

            #check if Godot set some preferences and adjust accordingly
            if (isset($json['score_offset'])){
                $score_offset = max(0,(int) $json['score_offset']);
            }
            if (isset($json['score_number'])){
                $score_range = max(1,(int) $json['score_number']);
            }

            #Form our SQL request template:
            $template = "SELECT `playerID`, CONCAT(`fname`, ' ', `lname`)`playerName`, `Level_4`
            FROM `cleartime` 
            LEFT JOIN `users` ON `cleartime`.`playerID` = `users`.`id`
            ORDER BY ISNULL(Level_4), Level_4 ASC
            LIMIT :number OFFSET :offset";
            
            #Prep and send the actual request to DB
            $sth = $pdo -> prepare($template);
            #Bind Offset and Range Values to INT not String
            $sth -> bindValue("offset", $score_offset, PDO::PARAM_INT);
            $sth -> bindValue("number", $score_range, PDO::PARAM_INT);
            $sth -> execute();

            #Grab all the resulting data from the request:
            $data = $sth -> fetchALL(PDO::FETCH_ASSOC);

            #Add the size of our result to the Godot Structure:
            $data["size"] = sizeof($data);

            print_response($data);

            die;
        break;


        #Add Score to Table
        case "add_level_1_ClearTime":
            #Check if we had a valid nonce: ##May want to comment this part for web Debugging
            if(!verify_nonce($pdo)){
                die;
            }
            #check that we were given a time and playerID:
            check_for_missing_data($json); #for general usecase
            
            // if (!isset($json['time'])){
            //     print_response([], "missing_time");
            //     die;
            // }

            // if (!isset($json['playerID'])){
            //     print_response([], "missing_playerID");
            //     die;
            // }
            
            #Make sure our PlayerId is under 24 characters: Might modify this since
            #PlayerID is Unique
            $player_ID = $json['playerID'];

            // if (strlen($player_ID) > 24){
            //    $player_ID = substr($player_ID, 24);
            //}

            #Form SQL request string:
            $template = "INSERT INTO `cleartime` (playerID,Level_1) VALUES(:playerID, :Level_1)
            ON DUPLICATE KEY UPDATE Level_1 = LEAST(:Level_1, VALUES(Level_1))";

            #Prep and send request to DB
            $sth = $pdo -> prepare($template);
            $sth -> execute(["playerID" => $player_ID, "Level_1" => $json['time']]);

            #Print back empty response saying there was no issue:
            print_response();
            die;
        break;

        case "add_level_2_ClearTime":
            #Check if we had a valid nonce: ##May want to comment this part for web Debugging
            if(!verify_nonce($pdo)){
                die;
            }

            #check that we were given a time and playerID:
            check_for_missing_data($json); #for general usecase
            
            #Make sure our PlayerId is under 24 characters: Might modify this since
            #PlayerID is Unique
            $player_ID = $json['playerID'];

            #if (strlen($player_ID) > 24){
            #    $player_ID = substr($player_ID, 24);
            #}

            #Form SQL request string:
            $template = "INSERT INTO `cleartime` (playerID,Level_2) VALUES(:playerID, :Level_2)
            ON DUPLICATE KEY UPDATE Level_2 = LEAST(:Level_2, VALUES(Level_2))";

            #Prep and send request to DB
            $sth = $pdo -> prepare($template);
            $sth -> execute(["playerID" => $player_ID, "Level_2" => $json['time']]);

            #Print back empty response saying there was no issue:
            print_response();
            die;
        break;

        case "add_level_3_ClearTime":
            #Check if we had a valid nonce: ##May want to comment this part for web Debugging
            if(!verify_nonce($pdo)){
                die;
            }

            #check that we were given a time and playerID:
            check_for_missing_data($json); #for general usecase
            
            #Make sure our PlayerId is under 24 characters: Might modify this since
            #PlayerID is Unique
            $player_ID = $json['playerID'];

            #if (strlen($player_ID) > 24){
            #    $player_ID = substr($player_ID, 24);
            #}

            #Form SQL request string:
            $template = "INSERT INTO `cleartime` (playerID,Level_3) VALUES(:playerID, :Level_3)
            ON DUPLICATE KEY UPDATE Level_3 = LEAST(:Level_3, VALUES(Level_3))";

            #Prep and send request to DB
            $sth = $pdo -> prepare($template);
            $sth -> execute(["playerID" => $player_ID, "Level_3" => $json['time']]);

            #Print back empty response saying there was no issue:
            print_response();
            die;
        break;

        case "add_level_4_ClearTime":
            #Check if we had a valid nonce: ##May want to comment this part for web Debugging
            if(!verify_nonce($pdo)){
                die;
            }

            #check that we were given a time and playerID:
            check_for_missing_data($json); #for general usecase
            
            #Make sure our PlayerId is under 24 characters: Might modify this since
            #PlayerID is Unique
            $player_ID = $json['playerID'];
            
            #if (strlen($player_ID) > 24){
            #     $player_ID = substr($player_ID, 24);
            # }

            #Form SQL request string:
            $template = "INSERT INTO `cleartime` (playerID,Level_4) VALUES(:playerID, :Level_4)
            ON DUPLICATE KEY UPDATE Level_4 = LEAST(:Level_4, VALUES(Level_4))";

            #Prep and send request to DB
            $sth = $pdo -> prepare($template);
            $sth -> execute(["playerID" => $player_ID, "Level_4" => $json['time']]);

            #Print back empty response saying there was no issue:
            print_response();
            die;
        break;


        #Handle invalid Request
        default:
            print_response([], "invalid_command");
            die;
    }


    function check_for_missing_data($tempjson){
        if (!isset($tempjson['time'])){
            print_response([], "missing_time");
            die;
        }

        if (!isset($tempjson['playerID'])){
            print_response([], "missing_playerID");
            die;
        }
    }

?>