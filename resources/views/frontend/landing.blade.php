
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>

    <link rel="shortcut icon" type="x-icon" href="assets/images/Logo.jpg">

    <link rel="stylesheet" href="assets/css/estilo.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">

</head>


<body style="background-image:url(assets/images/backg.svg)">
    <!--header-->
    <header>
        <a href="#" class="logo">Learn2Code</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#gamified">Features</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <div>
                @if (session('id'))
                    <div class="alert alert-success">
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </div>
                @else
                    <div class="alert alert-success">
                        <li><a href="login">Login</a></li>
                    </div>
                @endif
            </div>
        </ul>

    </header>

    <!--Home section-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Play!<br><span style="color: #8367AB;">CODE!</span></h1>
            <p>Gamified Coding Platform for Everyone!</p>
            @if (session('id'))

                <?php session_start(); $_SESSION['L2C_id'] = session('id');?> <!-- This line is for the Webgame to work Properly-->

                <a href="{{ route('startmenu') }}" class="start-btn"><img src="assets/images/start.svg"></a>
            @else
                <a href="{{ route('login') }}" class="start-btn"><img src="assets/images/start.svg"></a>
            @endif
        </div>
    </section>


    <!--Gamified section-->
    <section class="gamified" id="gamified">
        <div class="play">
            <h1>Gamified Features</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</p>
            <a href="#" class="play-btn"><img src="assets/images/playbtn.svg"></a>
        </div>
    </section>


    <!--quizzes section-->
    <section class="quizzes" id="quizzes">
        <div class="quiz">

            <li>
                <h1>Quiz</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
            </li>
            <img src="assets/images/qpic.svg">
        </div>
    </section>


    <!--tutorial section-->
    <section class="tutor" id="tutor">
        <div class="content">
            <div class="card" id="progs" data-top="1">
                <h3>Learn Languages</h3>
                <p>hahahahaha</p>  
            </div>
            <div class="card" id="ebook" data-top="2">
                <h3>Tons of Programming E-Books</h3>
                <p>hahahahaha</p>  
            </div>
            <div class="card" id="videos" data-top="3">
                <h3>High Quality Video Tutorials</h3>
                <p>hahahahaha</p>  
            </div>
            <div class="card" id="gotutor" data-top="4">
                <h3>Start from the Basics</h3>
                <p>hahahahaha</p> 
            </div> 
                <div class="last" data-top="1">
            </div>
        </div> 

        <script src="assets/js/main.js"></script>
    </section>

    <footer>
        <div class=foot>
            <div>
                <ul class="contact">
                    <li><a href="#"><img src="assets/images/logo.svg"
                                style="width: 200; height: 30px; align-content: center;"></a></li>
                    <li><a href="#">L2code@gmail.com</a></li>
                    <li><a href="#">+63612120211</a></li>
            </div>

            <div>
                <ul class="shortcut">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>

            <div>
                <ul class="others">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Services</a></li>
                    <li><a href="#">Cookies</a></li>
                </ul>
            </div>
        </div>
        <hr>

        </hr>
        <div class="socials">

            <ul class="textlogo">
                <li><a href="#">Learn2Code</a></li>
            </ul>

            <ul class="socmed">
                <li>follow us on:</li>
                <li><a href="#"><img src="assets/images/fb.svg"
                            style="width: 200; height: 30px; align-content: center;"></img></a></li>
                <li><a href="#"><img src="assets/images/insta.svg"
                            style="width: 200; height: 30px; align-content: center;"></img></a></li>
                <li><a href="#"><img src="assets/images/gmail.svg"
                            style="width: 200; height: 30px; align-content: center;"></img></a></li>
            </ul>

        </div>
    </footer>

    <script type="text/javascript" src="assets/js/respo.js"></script>

</body>

</html>

