<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Select Language</title>

    <link rel="stylesheet" href="/assets/css/moduleLang.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="shortcut icon" type="x-icon" href="../assets/images/logo.svg">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <script src="/assets/js/headermenu.js" defer></script>
    <script src="/assets/js/carousel.js" defer></script>
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
        <a href="/Playground" class="bx bx-chevron-left" id="back-btn"></a>
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
            <h2>Programming Quiz</h2>
            <p>Select Language</p>
        </div>

        <div class="content">
            <div class="content-section">
                <i id="left" class="bx bx-chevron-left"></i>
                <ul class="carousel">
                    @foreach ($data as $item)
                        <a href="/exercise/{{ urlencode($item->language) }}"><img src="/images/{{ $item->picture }}"
                                alt="img" draggable="false"></a>
                    @endforeach
                    {{-- <a href="{{ route('javaDiff') }}"><img src="assets/images/java.svg" alt="img" draggable="false"></a> --}}
                </ul>
                <i id="right" class="bx bx-chevron-right"></i>
            </div>
        </div>
    </section>

</body>

</html>
