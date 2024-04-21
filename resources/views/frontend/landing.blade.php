
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Learn2Code</title>
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/header2.css">

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">

</head>
<body>
    <!--header-->
    <header>
    <a href="#" class="logotext">Learn2Code</a>
    <a href="#" class="logo"><img src="/assets/images/logo.svg" alt=""></a>
        <ul>
            <li><a href="#home" class="active">Home</a></li>
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
    <section>
        <img src="assets/images/stars.png" id="stars"> 
        <img src="assets/images/moon.png" id="moon"> 
        <img src="assets/images/mountains_behind.png" id="mountains_behind">
        <h2 id="text">Explore & Code</h2>
            @if (session('id'))

                <?php session_start(); $_SESSION['L2C_id'] = session('id');?> <!-- This line is for the Webgame to work Properly-->

                <a href="{{ route('startmenu') }}" id="btn"><img src="assets/images/start.svg"></a>
            @else
                <a href="{{ route('login') }}" id="btn"><img src="assets/images/start.svg"></a>
            @endif
        <img src="assets/images/mountains_front.png" id="mountains_front">
    </section>


    <!--Gamified section-->
    <div class="sections" id="gamified">
        <div class="play">
        <div class="description">
            <h2>Gamified</h2>
            <p>Integrated gamification enhances systems by infusing game-like elements such as points, badges, and challenges. It motivates users, fosters engagement, and improves outcomes across diverse domains like education. 
                By transforming tasks into enjoyable experiences, integrated gamification maximizes participation and drives desired behaviors effectively.</p>
        </div>
        <img src="assets/images/gamifiedpic.svg">
        </div>
    </div>


    <!--quizzes section-->
    <div class="sections" id="quizzes">
        <div class="quiz">
            <img src="assets/images/qpic.svg">
            <div class="description">
                <h2>Programming Tests</h2>
                <p>Ready to put your coding powers to the test? Dive into our comprehensive collection of programming tests designed to challenge and enhance your skills. Designed specifically for beginner developers, our diverse range of 
                tests covers various languages and difficulty levels, helping you advance your programming journey. Take the challenge, level up, and showcase your coding expertise today!</p>
            </div>
        </div>
    </div>


    <!--tutorial section-->
    <div class="sections">
        <div class="content">
            <div class="card" data-top="1" style="background: url('assets/images/game4.png'); background-repeat: no-repeat;  background-size: cover; background-position: center;">
                <div class="description">
                    <h2>EXPLORE THE GAME</h2>
                </div> 
            </div>
            <div class="card" data-top="2" style="background: url('assets/images/game2.png'); background-repeat: no-repeat;  background-size: cover; background-position: center;">
                <div class="description">
                    <h2>COMPLETE THE LEVELS</h2>
                </div>
            </div>
            <div class="card"  data-top="3" style="background: url('assets/images/game3.png'); background-repeat: no-repeat;  background-size: cover; background-position: center;">
                <div class="description">
                    <h2>LEARN BY EXPERIENCE</h2>
                </div>
            </div>
            <div class="card" i data-top="4" style="background: url('assets/images/game1.png'); background-repeat: no-repeat;  background-size: cover; background-position: center;">
                <div class="description">
                    <h2>PLAY & ENJOY</h2>
                </div> 
            </div> 
                <div class="last" data-top="1">
            </div>
        </div> 

        <script src="assets/js/main.js"></script>
    </div>

    <footer>
        <div class=foot>
            <div>
                <ul class="contact">
                    <li><a href="#"><img src="assets/images/logo.svg"></a></li>
                </ul>
            </div>

            <div>
                <ul class="shortcut">
                    <li><a href="/landing">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="login">Login</a></li>
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
        <div class="socials">

            <ul class="textlogo">
                <li><a href="#">Learn2Code</a></li>
            </ul>

            <ul class="socmed">
                <li><p>follow us on:</p></li>
                <li><a href="#"><img src="assets/images/fb.svg"></img></a></li>
                <li><a href="#"><img src="assets/images/insta.svg"></img></a></li>
                <li><a href="#"><img src="assets/images/gmail.svg"></img></a></li>
            </ul>

        </div>
    </footer>

    <script>
        let stars = document.getElementById('stars');
        let moon = document.getElementById('moon');
        let mountains_behind = document.getElementById('mountains_behind'); 
        let text = document.getElementById('text');
        let btn = document.getElementById('btn');
        let mountains_front = document.getElementById('mountains_front');
        let header = document.querySelector('header');

        window.addEventListener('scroll' , function(){
        let value = window.scrollY;
        stars.style.left = value * 0.25 + 'px'; 
        moon.style.top = value * 1.00 + 'px';
        mountains_behind.style.top = value * 0.5 + 'px';
        mountains_front.style.top = value * 0 + 'px';
        text.style.marginRight = value * 5 + 'px';
        text.style.marginTop = value * 1.5 + 'px';
        btn.style.marginTop = value * 1.7 + 'px';   
        header.style.top = value * 0.5 + 'px'; 
    })
</script>

</body>

</html>

