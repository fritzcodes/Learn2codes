
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>

    <link rel="shortcut icon" type="x-icon" href="assets/images/Logo.jpg">

    {{-- <link rel="stylesheet" href="assets/css/estilo.css"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap'); 
 *   
 {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: 'Orbitron', sans-serif;
 text-decoration: none;
 list-style: none;
 scroll-behavior: smooth;
 }

 :root { /*---font and color defaults --*/
	--bg-color: #fff;
	--text-color: #221341;
	--second-color: #5a7184;
	--main-color: #6e54fa;
	--big-font: 6rem;
	--h2-font: 3rem;
	--p-font: 1.1rem;
 } 


 body
 {
 min-height: 100vh; 
 overflow-x: hidden;
 background: linear-gradient(#2b1055, #1c0522);

 }


 header
 {
 position: absolute; 
 top: 0;
 Left: 0;
 width: 100%;
 padding: 30px 50px;
 display: flex;
 justify-content: space-between;
 overflow-x: hidden;
 align-items: center;
 z-index: 10000;
 }

 header .logotext
 {
 display: flex;
 color: #fff;
 font-weight: 700;
 text-decoration: none;
 font-size: var(--h2-font);
 text-transform: uppercase;
 Letter-spacing: 2px;
 }


 header .logo {
	display: none;
 }

 .logo img {
	margin: 5px 10px 0 0;
	width: 50px;
	height: 50px;
	border-radius: 100%;	
 }


 header ul
 {
 display: flex;
 justify-content: center;
 align-items: center;
 }

 header ul li
 {
 list-style:none;
 margin-left: 20px;
 }

 header ul li a
 {
 text-decoration: none;
 padding: 6px 15px;
 color: #fff;
 border-radius: 20px;
 }
 header ul li a:hover,
 header ul li a.active
 {
 background: #fff;
 color: #2b1055;
 }

 section
 {
 position: relative;
 width: 100%;
 height: 100vh;
 padding: 100px;
 display: flex;
 justify-content: center;
 align-items: center;
 overflow: hidden;
 }


 section::before
 {
    content:'';
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    background: linear-gradient(to top,#1c0522, transparent);
    z-index: 1000;
 }

 section img
 {
 position: absolute;
 top: 0;
 left: 0;
 width:100%;
 height: 100%;
 object-fit: cover;
 pointer-events: none;
 }

 section img#moon
 {	
    mix-blend-mode: screen;

 }
 section img#mountains_front
 {
    z-index: 10;
 }



 #text
 {
    position: absolute;
    right: -700px;
    color: #fff;
    white-space: nowrap;
    font-size: 7.5vw;
    z-index: 9;
 }

 #btn
 {
 text-decoration: none;
 display: inline-block;
 width: 150px;
 height: 60px;
 border-radius: 40px;
 z-index: 9;
 transform: translateY(100px);
 }

 #btn:hover {
	animation: none;
    filter: drop-shadow(0px 0px 20px rgba(255, 255, 255, 0.767));
	
 }


 .sections {
	position: relative;
 width: 100%;
 padding: 100px;
 display: flex;
 justify-content: center;
 align-items: center;
    position: relative;
	padding: 100px;
    background: #1c0522;
 }

 .play {
	padding: 80px 5%;
	display: flex;
	justify-content: center;
	align-items: center;
	overflow: hidden;
  	border-radius: 35.066px;
	background: blueviolet;
 }

 .play .description {
	margin-right: 40px;
 }

 .description h2, .description p {
    font-family: Arial, Helvetica, sans-serif;

 }

 .description h2 {
	font-size: var(--h2-font);
	color: var(--bg-color);
	line-height: 1.2;
	letter-spacing: 4px;
    font-weight: 700;
	margin-bottom: 20px;
	text-shadow:1px 1px #000;
 }
 .description p {
	color: var(--bg-color);
	font-size: var(--p-font);
	line-height: 38px;
}

 .quiz {
	display: flex;
	padding: 80px 5%;
	justify-content: center;
	align-items: center;
	overflow: hidden;
  	border-radius: 35.066px;
	background: blueviolet;
 }

 .quiz .description {
	margin-left: 50px;
 }

 .content {
	padding: 0px 10%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
 }

 .card {
	display: flex;
	justify-content: center;
	align-items: center;
    border-radius: 40px;
    width: 100%;
    height: 85vh;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, .6), -2px -2px 10px rgba(39, 27, 27, 0.18);
    position: sticky;
	overflow: hidden;
    top:15%;
    transition: transform 0.3s ease-in-out; /* Added transition property */
 }

 .card .description h2{
	text-align: center;
	font-size: 90;
	padding: 20px 400px;
	border-radius: 15px;
	text-shadow: -3px 3px #000;
	animation: highlight-animation 2s infinite alternate;	

 }

 @keyframes highlight-animation {
	from { background-color: transparent; }
	to { background-color: rgb(102, 18, 170); }
  }



 /*------------------footer--------------------*/
 footer {
	background: #1c0522;
	padding-top: 300px;
 }

 .foot {
	padding: 30px 50px;
	font-size: var(--p-font);
	position: relative;
	bottom:0;
	right: 0;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content:space-between;
 }

 .foot li a {
	color: var(--bg-color);
 }

 .contact li a img { 
	width: 70px;
	border-radius: 50%;
	background-position: center;
 }

 .socials {
	padding: 30px 50px;
	font-size: var(--p-font);
	position: relative;
	bottom:0;
	right: 0;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: space-between;
 }

 .socials ul li a {
	color: var(--bg-color);
 }

 .textlogo li a {
	font-weight: 600;
 	animation: text-colors 2s infinite alternate;	
 }

 @keyframes text-colors {
	from { color: transparent; }
	to { color: rgb(102, 18, 170); }
  }

 .socmed{
	display: flex;
 }

 .socmed a{
	margin: 10px;
 }

 .socmed li a img {
	width: 30px; 
	height: 30px; 
	
 }

 .socmed p {
	margin: 2px;
	color: var(--bg-color);
 }

 /*------------Responsiveness------------*/
 @media (max-width: 853px) {
	:root {
		--big-font: 2.8rem;
		--h2-font: 1.5rem;
		--p-font: 1rem;
		transition: .2s;
	}

	header, .foot, .socials {
		padding: 15px 30px;
	}

	.sections {
		padding: 30px;
	}

	header .logotext {
		display: none;
	}
	
	header .logo {
		display: flex;
	}

	header ul li {
		list-style:none;
		margin-left: 15px;
	}

	header ul li a {
		padding: 6px 15px;

	}

	.play img, .quiz img {
		display: none;
	}

	.play .description, .quiz .description {
		margin-left: 0;
		margin-right: 0;
	}

	.card {
	    width: 500px;
	    height: 600px;
		padding: 15px 4%;
	    }
	
}


 @media (max-width: 575px) {
	header, .foot, .socials {
		padding: 15px 20px;
	}

	header ul li {
		list-style:none;
		margin-left: 5px;
	}

	header ul li a {
		font-size: var(--p-font);
		text-decoration: none;
		padding: 3px 5px;

	}

	:root {
		--big-font: 2.8rem;
		--h2-font: 1.3rem;
		--p-font: .8rem;
		transition: .2s;
	}

	.play img, .quiz img {
		display: none;
	}

	.play .description, .quiz .description {
		margin-left: 0;
		margin-right: 0;
	}

	.sections {
		padding: 20px;
	}

	.foot {
		font-size: var(--p-font);
		position: relative;
		bottom:0;
		right: 0;
		width: 100%;
		display: flex;
		align-items: center;
		justify-content: space-between;
	}

	.socials {
		font-size: var(--p-font);
		position: relative;
		bottom:0;
		right: 0;
		width: 100%;
		display: flex;
		align-items: center;
		justify-content: space-between;
	}

	.card {
	    width: 320px;
	    height: 500px;
		padding: 15px 4%;
	    }



}

 @media (max-width: 390px) {
	.card {
	    width: 300px;
	    height: 530px;
		padding: 15px 4%;
	    }

    :root {
		--big-font: 3.5rem;
		--h2-font: 1.5rem;
		transition: .2s;
	}

	.foot, .socials {
		display: inline-block;

	}


 }

 @media (min-height: 1024px) {
	header, .foot, .socials {
		padding: 30px 40px;
	}

	.sections {
		padding: 40px;
	}

 }

 @media (min-height: 1360px) {
	header .foot, .socials {
		padding: 30px 80px;
	}

	.sections {
		padding: 80px;
	}

	.card {
		width: 700px;
		height: 900px;
		padding: 70px 10%;

	}

	}



</style>

<body>
    <!--header-->
    <header>
    <a href="#" class="logotext">Learn2Code</a>
    <a href="#" class="logo"><img src="/assets/images/logo.jpg" alt=""></a>
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
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <img src="assets/images/qpic.svg">
        </div>
    </div>


    <!--quizzes section-->
    <div class="sections" id="quizzes">
        <div class="quiz">
            <img src="assets/images/qpic.svg">
            <div class="description">
                <h2>Programming Tests</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
                    <li><a href="#"><img src="assets/images/logo.jpg"></a></li>
                </ul>
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

