<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>
    <link rel="stylesheet" href="../assets/css/Admin.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


    {{-- <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .user img {
            width: 50px;
            border-radius: 100%;
            border: 1px solid #eee;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 80px;
            background: linear-gradient(180deg, #020202 0%, rgba(52, 44, 44, 0.69) 50%, rgba(2, 2, 2, 50.79) 100%),
                linear-gradient(0deg, rgba(137, 33, 33, 70.2), rgba(137, 33, 33, 70.2)),
                linear-gradient(180.04deg, rgba(253, 140, 140, 70.81) 0.04%, rgba(255, 128, 185, 0.57699) 0.04%, rgba(200, 97, 97, 0.710019) 50.69%, rgba(206, 2, 137, 0.53) 101.64%);
            padding: 0.4rem 0.8rem;
            transition: all 0.5s ease;
        }

        .sidebar.active~.main-content {
            left: 250px;
            width: calc(100% - 250px);
        }

        .sidebar.active {
            position: fixed;
            width: 250px;
        }

        .sidebar #btn {
            position: absolute;
            color: #eee;
            top: .4rem;
            left: 50%;
            font-size: 1.2rem;
            line-height: 50px;
            transform: translateX(-50%);
            cursor: pointer;
        }

        .sidebar.active #btn {
            left: 90%;
        }

        .sidebar .top .logo {
            color: #eee;
            display: flex;
            height: 50px;
            width: 100%;
            align-items: center;
            pointer-events: none;
            opacity: 0;
        }

        .sidebar.active .top .logo {
            opacity: 1;
        }

        .top .logo {
            font-size: 2rem;
            margin-right: 5px;
        }

        .user {
            display: flex;
            align-items: center;
            margin: 1rem 0;
        }

        .user p {
            color: #eee;
            opacity: 1;
            margin-left: 1rem;
        }

        .username {
            font-weight: 600;
        }

        .sidebar p {
            opacity: 0;
        }

        .sidebar.active p {
            opacity: 1;
        }

        .sidebar ul li {
            position: relative;
            list-style-type: none;
            height: 50px;
            width: 90%;
            margin: 0.8rem auto;
            line-height: 50px;
        }

        .sidebar ul li a {
            color: #eee;
            display: flex;
            align-items: center;
            text-decoration: none;
            border-radius: 0.8rem;
        }

        .sidebar ul li a:hover {
            background-color: #fff;
            color: #1a1a1a;
        }

        .sidebar ul li a i {
            min-width: 50px;
            text-align: center;
            height: 50px;
            border-radius: 12px;
            line-height: 50px;
        }

        .sidebar .nav-item {
            opacity: 0;
        }


        .sidebar.active .nav-item {
            opacity: 1;
        }


        /*-----------MAIN----------------*/
        .main-content {
            position: relative;
            background: linear-gradient(0deg, rgba(137, 33, 33, 0.2), rgba(137, 33, 33, 0.2)),
                linear-gradient(180.04deg, rgba(253, 140, 140, 0.81) 0.04%, rgba(255, 128, 185, 0.57699) 0.04%, rgba(200, 97, 97, 0.710019) 50.69%, rgba(206, 2, 137, 0.53) 101.64%);
            ;
            min-height: 100vh;
            top: 0;
            left: 80px;
            transition: all 0.5s ease;
            width: calc(100% - 80px);
            padding: 1rem;
            display: none;
        }

        #content1 {
            display: block;
        }



        .active {
            background-color: #4CAF50;
            /* Green background for active links */
            color: white;
            /* White text for active links */
        }



        /*-----------FORM----------------*/
        .form {
            justify-content: space-between;
            width: 100%;
            display: flex;
            margin-bottom: 30px;
            overflow-x: hidden;
        }

        label {
            font-size: 20px;
            font-weight: 600;
            color: #fff;
        }

        .input {
            margin-right: 20px;
        }

        .quesDiv {
            padding: 0 10px 0 0;
            display: block;
            width: 100%;
        }

        .quesDiv textarea {
            border-radius: 15px;
            width: 100%;
            color: #eee;
            background: linear-gradient(0deg, rgba(137, 33, 33, 0.2), rgba(137, 33, 33, 0.2)),
                linear-gradient(180.04deg, rgba(253, 140, 140, 0.81) 0.04%, rgba(255, 128, 185, 0.57699) 0.04%, rgba(200, 97, 97, 0.710019) 50.69%, rgba(206, 2, 137, 0.53) 101.64%);
            font-size: 17px;
            text-indent: 10px;
            padding: 5px 5px 5px 5px;
        }

        .optionDiv {
            width: 100%;
            display: block;
            color: #ddd;
        }

        .optionDiv input {
            color: #eee;
            background: linear-gradient(0deg, rgba(137, 33, 33, 0.2), rgba(137, 33, 33, 0.2)),
                linear-gradient(180.04deg, rgba(253, 140, 140, 0.81) 0.04%, rgba(255, 128, 185, 0.57699) 0.04%, rgba(200, 97, 97, 0.710019) 50.69%, rgba(206, 2, 137, 0.53) 101.64%);
            border-radius: 5px;
            text-indent: 5px;
            font-size: 17px;
            margin-bottom: 3px;
            padding: 0 10px 0 0;
            width: 100%;
            height: 30px;
        }

        .ansDiv {
            padding: 0 0 0 10px;
            width: 100%;
            display: block;
        }

        .ansDiv input {
            color: #eee;
            background: linear-gradient(0deg, rgba(137, 33, 33, 0.2), rgba(137, 33, 33, 0.2)),
                linear-gradient(180.04deg, rgba(253, 140, 140, 0.81) 0.04%, rgba(255, 128, 185, 0.57699) 0.04%, rgba(200, 97, 97, 0.710019) 50.69%, rgba(206, 2, 137, 0.53) 101.64%);
            border-radius: 5px;
            text-indent: 5px;
            font-size: 17px;
            width: 100%;
            height: 30px;
        }

        .ansDiv button {
            margin-top: 60px;
            float: right;
            background: linear-gradient(45deg, #304e4b, hsl(258, 37%, 82%));
            color: #eee;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 17px;
            text-align: center;
            border-width: 0;
        }

        .ansDiv button:hover {
            cursor: pointer;
        }

        .langDiv {
            width: 100%;
            margin: 10px 0;
        }

        .langDiv select {
            color: #eee;
            background: linear-gradient(0deg, rgba(137, 33, 33, 0.2), rgba(137, 33, 33, 0.2)),
                linear-gradient(180.04deg, rgba(253, 140, 140, 0.81) 0.04%, rgba(255, 128, 185, 0.57699) 0.04%, rgba(200, 97, 97, 0.710019) 50.69%, rgba(206, 2, 137, 0.53) 101.64%);
            font-weight: 400;
            border-radius: 5px;
            font-size: 17px;
        }

        .langDiv select option {
            color: #1a1a1a;
        }

        .difDiv {
            width: 100%;
            margin: 10px 0;
        }

        .difDiv select {
            color: #eee;
            background: linear-gradient(0deg, rgba(137, 33, 33, 0.2), rgba(137, 33, 33, 0.2)),
                linear-gradient(180.04deg, rgba(253, 140, 140, 0.81) 0.04%, rgba(255, 128, 185, 0.57699) 0.04%, rgba(200, 97, 97, 0.710019) 50.69%, rgba(206, 2, 137, 0.53) 101.64%);
            font-weight: 400;
            border-radius: 5px;
            font-size: 17px;
        }

        .difDiv select option {
            color: #1a1a1a;
        }


        /*-----------TABLE----------------*/
        .table {
            border-radius: 15px;
            display: flex;
            align-items: self-start;
            scroll-behavior: smooth;
        }

        .quizzes {
            background: linear-gradient(180deg, #020202 0%, rgba(52, 44, 44, 0.69) 50%, rgba(2, 2, 2, 50.79) 100%),
                linear-gradient(0deg, rgba(137, 33, 33, 70.2), rgba(137, 33, 33, 70.2)),
                linear-gradient(180.04deg, rgba(253, 140, 140, 70.81) 0.04%, rgba(255, 128, 185, 0.57699) 0.04%, rgba(200, 97, 97, 0.710019) 50.69%, rgba(206, 2, 137, 0.53) 101.64%);
            width: 100%;
            height: 50vh;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.2);
            overflow-y: scroll;
            scroll-behavior: smooth;
        }

        .heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #eee;
        }

        .action {
            border-radius: 5px;
            padding: 5px 10px;
            background: linear-gradient(45deg, #304e4b, hsl(258, 37%, 82%));
            color: #eee;
            text-decoration: none;
            text-align: center;
        }

        table {
            table-layout: fixed;
            margin-top: 10px;
            width: 100%;
            border-collapse: collapse;
        }

        thead td {
            font-weight: 600;
            color: #ddd;
        }

        table tr {
            border-bottom: 1px solid rgba(83, 52, 52, 0.9);
        }

        tbody tr:hover {
            cursor: cell;
            background: #0a0707;
        }

        table tr:last-child {
            border-bottom: none;
        }

        td {
            max-width: 300px;
            /* Adjust based on your needs */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            color: #cecdcd;
            padding: 9px 5px;
        }

        .ved i {
            padding: 7px;
            color: #fff;
            border-radius: 50px;

        }

        .quizzes table tbody td:last-child {
            white-space: nowrap;
        }

        .bxs-show {
            background: #27f1b4;
        }

        .bxs-show:hover {
            background: #fdfffe;
            color: #000;
            cursor: pointer;
        }

        .bxs-edit {
            background: #2767f1;
        }

        .bxs-edit:hover {
            background: #fdfffe;
            color: #000;
            cursor: pointer;
        }

        .bxs-trash {
            background: #ed5564;
        }

        .bxs-trash:hover {
            background: #fdfffe;
            color: #000;
            cursor: pointer;
        }


        /*-----------RESPONSIVENESS----------------*/
        @media(max-width:1300px) {
            .sidebar {
                width: 80px;
            }

            .main-content {
                width: calc(100% - 80px);
            }


        }


        @media(max-width:860px) {
            .sidebar {
                position: fixed;
            }

            .ved i {
                padding: 7px;
                color: #fff;
                border-radius: 50px;
                margin: 15px;
                display: flex;

            }

            .quiz td:nth-child(5) {
                display: none;
            }

            .table {
                grid-template-columns: 1fr;
            }
        }


        @media(max-width:540px) {
            .form {
                display: block;

            }

            .ansDiv {
                margin-top: 20px;
                padding: 0;
            }

            .ansDiv button {
                float: none;
                position: relative;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .optionDiv {
                margin-top: 20px;
                padding: 0;
            }

            .quesDiv {
                padding: 0;
            }

            .langDiv {
                margin-top: 20px;
            }

            .difDiv {
                margin-top: 20px;
            }


            .sidebar.active~.main-content {
                left: 0;
                width: calc(100% - 0%);
            }

            .sidebar.active {
                z-index: 1000;
                width: 100%;
            }

            .quiz td:nth-child(2) {
                display: none;
            }

        }

        @media(max-width:420px) {
            .quiz {
                font-size: 70%;
                padding: 10px;
                min-height: 200px;
            }
        }
    </style> --}}

</head>

<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <span>Learn2Code</span>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <div class="user">
            <img src="../assets/images/avatar.png" alt="user" class="user-img">
            <div>
                <p class="username">POGING ADMIN</p>
                <p>Admin</p>
            </div>
        </div>
        <ul>
            <li>
                <a href="#" class='active' id="nav1" onclick="showContent('content1')">
                    <i class="bx bxs-user"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" id="nav2" onclick="showContent('content2')">
                    <i class="bx bxs-trophy"></i>
                    <span class="nav-item">Leaderboard</span>
                </a>
            </li>
            <li>

                <a href="#" id="nav3" onclick="showContent('content3')">
                    <i class="bx bxs-hourglass-top"></i>
                    <span class="nav-item">Quiz</span>
                </a>
            </li>
            <li>

                <a href="#" id="nav4" onclick="showContent('content4')">
                    <i class="bx bxs-chat"></i>
                    <span class="nav-item">Forum</span>
                </a>
            </li>
            <li>
                <a href="#" id="nav5" onclick="showContent('content5')">
                    <i class="bx bx-dumbbell"></i>
                    <span class="nav-item">EXP</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-exit"></i>
                    <span class="nav-item">Logout</span>
                </a>
            </li>
        </ul>

    </div>

    <!-- -----------MAIN CONTENT------------ -->
    <div class="main-content" id="content1">
        <h1>HAHAHAHA</h1>
    </div>

    <div class="main-content" id="content2" style="display: none;">
        <h1>Hehehehe</h1>
    </div>



    <div class="main-content" id="content3" style="display: none;">

        <!-- -----------FORM------------ -->
        <form action="/admin/addQuestion" method="post">
            @csrf
            <div class="form">
                <div class="quesDiv">
                    <label for="que">Question</label>
                    <br>
                    <textarea required name="question" id="" cols="30" rows="10" placeholder="Type a question..."></textarea>
                    <br>
                </div>

                <div class="optionDiv">
                    <label for="ops" id="option">Options</label>
                    <p>Option 1:</p> <input required type="text" name="option1" id=""><br>
                    <p>Option 2:</p> <input required type="text" name="option2" id=""><br>
                    <p>Option 3:</p> <input required type="text" name="option3" id=""><br>
                    <p>Option 4:</p> <input required type="text" name="option4" id=""><br>

                </div>

                <div class="ansDiv">
                    <label for="ans">Answer </label>
                    <input required type="text" name="answer" id="" class="input">

                    <div class="langDiv">
                        <label for="lang">Programming Language</label>
                        <select name="language" id="">
                            <option value="Java">Java</option>
                            <option value="Python">Python</option>
                            <option value="C#">C#</option>
                            <option value="C++">C++</option>
                            <option value="JavaScript">JavaScript</option>
                        </select><br>
                    </div>

                    <div class="difDiv">
                        <label for="dif">Difficulty</label>
                        <select name="level" class="input" id="">
                            <option value="easy">Easy</option>
                            <option value="medium">Medium</option>
                            <option value="hard">Hard</option>
                        </select>
                    </div>
                    <button onclick="" id="add_question" type="submit" value="Add Question">Submit</button>
                </div>
            </div>
        </form>


        <!-- -----------TABLE------------ -->
        <div class="table">
            <div class="quizzes">
                <div class="heading">
                    <h2>Quiz</h2>
                    <a href="#" class="action">View All</a>
                </div>
                <table class="quiz">
                    <thead>
                        <td>Questions</td>
                        <td>Answers</td>
                        <td>Language</td>
                        <td>Difficulty</td>
                        <td>Options</td>
                        <td>Actions</td>
                    </thead>
                    <tbody>
                        @foreach ($questions as $question)
                        <form method="POST" action="/admin/deleteQuestion?id={{ $question->id }}">
                            @csrf
                            <tr>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->answer }}</td>
                                <td>{{ $question->language }}</td>
                                <td>{{ $question->level }}</td>
                                <td>{{ $question->option1 . ' | ' . $question->option2 . ' | ' . $question->option3 . ' | ' . $question->option4 }}</td>
                                <td class="ved">
                                    <i class="bx bxs-show"></i>
                                    <i class="bx bxs-edit"></i>
                                    <button type="submit" class="bx bxs-trash"></button>
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </tbody>
            </div>
        </div>
    </div>

    <div class="main-content">

    </div>

    <script src="../assets/js/admin/admin.js" async></script>
    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function() {
            sidebar.classList.toggle('active');
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Attach click event listeners to each navigation link
            document.querySelectorAll('.sidebar a').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent the default anchor link behavior

                    const contentId = this.id.replace('nav', 'content');
                    showContent(contentId);

                    // Highlight the active link
                    document.querySelectorAll('.sidebar a', 'sidebar a:active').forEach(link => {
                        link.classList.remove(
                        'active'); // Remove active class from all links
                    });
                    this.classList.add('active'); // Add active class to the clicked link
                });
            });
        });

        function showContent(contentId) {
            // Hide all content
            document.querySelectorAll('.main-content').forEach(content => {
                content.style.display = 'none';
            });

            // Show the selected content
            document.getElementById(contentId).style.display = 'block';
        }
    </script>

</body>

</html>
