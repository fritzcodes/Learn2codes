<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Playground | Learn2Code</title>
  <link rel="stylesheet" href="assets/css/playMenu.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">

</head>
<body style="background-image: url(assets/images/Backlogin.png);">

    <header>
        <a href="/startmenu" class="bx bx-chevron-left" id="back-btn"></a>
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

            <li><a href="/startmenu">Home</a></li>
            <li><a href="/forum">Forums</a></li>
            <li><a href="/Playground">Playground</a></li>
            <li><a href="/module/moduleLanguage">Modules</a></li>
            <li><a href="/leaderboard">Leaderboard</a></li>
            <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

        </ul>

    </header>

    <section class="space-background">
    <div class=title>
        <h2>Playground</h2>
      </div>  
     <div class="content-section">
          <a href="{{ route('Language') }}">
            <img src="assets/images/quizzes-btn.svg" alt="Quizzes" id="quizzes">
          </a>
          <a href="/exercise/selectLanguage"> 
            <img src="assets/images/exercise-btn.svg" alt="Exercises" id="exercises">
          </a>
          <a href="/game/">
            <img src="assets/images/gamified-btn.svg" alt="Gamified" id="gamified">
          </a>
    </div>
  </section>

    <script type="text/javascript" src="assets/js/headermenu.js"></script>

</body>
</html>
