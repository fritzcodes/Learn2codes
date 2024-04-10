<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Menu | Learn2Code</title>
    <link rel="stylesheet" href="assets/css/startmenu.css">
    <link rel="shortcut icon" type="x-icon" href="assets/images/Logo.jpg">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    
</head>

<body style="background-image: url(assets/images/backmenu.svg);">

    <header>
        <a href="/" class="bx bx-chevron-left" id="back-btn"></a>
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
        <h2>Main menu</h2>
      </div> 
     <div class="content-section">
          <a href="/Playground" >
            <img src="assets/images/playground-btn.svg" alt="Playground" id="playground">
          </a>
          <a href="/leaderboard"> 
            <img src="assets/images/leaderboard-btn.svg" alt="Leaderboard" id="leaderboard">
          </a>
          <a href="module/moduleLanguage">
            <img src="assets/images/module-btn.svg" alt="Modules" id="module">
          </a>
          <a href="/forum"> 
            <img src="assets/images/forums-btn.svg" alt="forum" id="forum">
          </a>
    </div>
  </section>

    <script type="text/javascript" src="assets/js/headermenu.js"></script>

</body>

</html>
