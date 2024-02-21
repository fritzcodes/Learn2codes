<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Playground</title>
  <link rel="stylesheet" href="assets/css/playMenu.css">

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
      text-align: center;
      padding: 90px 10%;
      width: 100%;
      height: 100vh;
      background: url("assets/images/backmenu.svg");
      color: var(--text-color);
      overflow-x: hidden; /* Prevent horizontal scrolling */
      z-index: -1; /* Behind other content */
      background-size: cover;
      animation: animateBackground 20s linear infinite; /* Adjust as needed */
  }


    @keyframes animateBackground {
      0% {
        background-position: 0 0;
      }
      100% {
        background-position: 100% 100%;
      }
  }
</style>
</head>
<body>

    <header>
        <a href="startmenu" class="bx bx-chevron-left" id="back-btn"></a>
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
            <li><a href="Playground">Playground</a></li>
            <li><a href="#modules">Modules</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
            <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

        </ul>

    </header>

  <section class="space-background">
    <h3 class="title">Playground</h3>
     <div class="content-section">
        <div class="content-container1">
          <a href="{{ route('Language') }}">
            <img src="assets/images/quizzes-btn.svg" alt="Quizzes" id="quizzes">
          </a>
        </div>

        <div class="content-container2">
          <a href="{{ route('javaExe') }}" class="content-link"> 
            <img src="assets/images/exercise-btn.svg" alt="Exercises" id="exercises">
          </a>
        </div>

        <div class="content-container3">
          <a href="#gamified" class="content-link">
            <img src="assets/images/gamified-btn.svg" alt="Gamified" id="gamified">
          </a>
        </div>

    </div>
  </section>

<script type="text/javascript" src="assets/js/headermenu.js"></script>

</body>
</html>
