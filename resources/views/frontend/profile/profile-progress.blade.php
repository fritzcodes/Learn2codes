<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn2Code</title>
  <link rel="stylesheet" href="assets/css/Progress.css">

<link rel="stylesheet"
   href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">

<style>
     body {
      padding: 90px 10%;
      width: 100%;
      height: 100vh;
      background: url('assets/images/proressbg.svg') no-repeat center center fixed;
      background-size: cover;
      color: var(--text-color);
      overflow-x: hidden; /* Prevent horizontal scrolling */
      z-index: -1; /* Behind other content */
      background-size: cover;
      
  }
</style>



</head>
<body>
  
  <header>
    <a href="{{ route('profile') }}" class="bx bx-chevron-left" id="back-btn"></a>
    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">

        <ul class="profile">
            <button><a href="{{ route('profile') }}" class="profile-link">

                    @if (Auth::check() && Auth::user()->profile_photo)
                        <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : 'assets/images/avatar.png' }}"
                            alt="Profile Photo" class="avatar">
                    @else
                        <!-- Placeholder image or default avatar -->
                        <img src="assets/images/avatar.png" alt="Default Avatar" class="avatar">
                    @endif
                    <h2>{{ Auth::user()->username }}</h2>
                </a></button>
        </ul>

        <li><a href="startmenu">Home</a></li>
        <li><a href="#forums">Forums</a></li>
        <li><a href="#playground">Playground</a></li>
        <li><a href="#modules">Modules</a></li>
        <li><a href="#leaderboard">Leaderboard</a></li>
        {{-- <button class="login-btn" href="{{ route('logout') }}" >Logout</button> --}}
        <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

    </ul>

</header>


 <section class="space-background">

	<div class="heading2">My Exp Progress</div>
	<div class="headline2">_____________</div>
        <div class="label1">MODULES</div>
        <p class="linelabel1">__________________________________________</p>
	<div class="percentage1">Modules experience gain is: </div>
	<div class="modula">0</div>

	<div class="label2">EXERCISE</div>
        <p class="linelabel2">___________________________________________</p>
	<div class="percentage2">Exercise experience gain is: </div>
	<div class="exer">0</div>
   
        <div class="label3">Quizzes</div>
        <p class="linelabel3">__________________________________________</p>
	<div class="percentage3">Quizzes experience gain is: </div>
	<div class="quiz">0</div>

	<div class="rectangle-15">
        <p class="Experience">Progress Experience</p>
        <div class="gauge">
          <div class="progress">
            <div class="bar"></div>
            <div class="needle"></div>
            <br>
            <div class="percentage">0</div>
		
          </div>
          <p class="label"></p>
	</div>
    
           
</section>

<script type="text/javascript" src="js/headermenu.js"></script>
<script src="js/Progress.js"></script>
<script>document.getElementById('menu-icon').addEventListener('click', function () {
  document.querySelector('.navbar').classList.toggle('open');
});
</script>
</body>
</html>

