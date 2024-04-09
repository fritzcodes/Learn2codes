<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quizzes</title>

<link rel="stylesheet" href="assets/css/selectLanguage.css">
<link rel="shortcut icon" type="x-icon" href="assets/images/Logo.jpg">
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
<script src="assets/js/headermenu.js" defer></script>
<script src="assets/js/carousel.js" defer></script>
<style>
    body {
  padding: 90px 10%;
  width: 100%;
  height: 100vh;
  background: url("assets/images/backquiz.svg");
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
      <h3>Quiz</h3>
      </div>

      <div id="subtitle">
        <h2>Select Language</h2> 
      </div>

    <div class="content">     
     <div class="content-section">
      <i id="left" class="bx bx-chevron-left"></i>
        <ul class="carousel">
          @foreach($data as $item)
          <a href="/quiz/{{urlencode($item->language)}}"><img src="/images/{{$item->picture}}" alt="img" draggable="false"></a>
          @endforeach
          {{-- <a href="{{ route('javaDiff') }}"><img src="assets/images/java.svg" alt="img" draggable="false"></a> --}}
      </ul>
      <i id="right" class="bx bx-chevron-right"></i>
    </div>
    </div>
  </section>

</body>
</html>
