<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Python Difficulty | Quiz</title>
  <link rel="stylesheet" href="assets/css/quizDiff.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">
 <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
 <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
 <script src="/assets/js/headermenu.js" defer></script>

<style>
    body {
        background: url("../assets/images/backlogin.png");
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        height: 100vh; /* Use full viewport height */
        margin: 0; /* Remove default body margin */
        background-size: cover;
        overflow-y: hidden;
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
        <a href="{{ route('Language') }}" class="bx bx-chevron-left" id="back-btn"></a>
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
      <div class="title">
      <h3 >Quiz</h3>
      </div>
      <div id="subtitle">
        <h2>Select Difficulty</h2>
      </div>
      
     <div class="content-section">
        <a>
        <img src="assets/images/python_diff.svg" alt="Quizzes" id="logo">
        </a>

        <div class="content-container1">

          <a href="{{ route('pythonEasy') }}" id="easy"><h1>Easy</h1>
          </a>

          <a href="{{ route('pythonMedium') }}" id="medium"><h1>Medium</h1>
          </a>

          <a href="{{ route('pythonHard') }}" id="hard"><h1>Hard</h1>
          </a>

        </div>
    </div>
  </section>

<script type="text/javascript" src="assets/js/headermenu.js"></script>

</body>
</html>
