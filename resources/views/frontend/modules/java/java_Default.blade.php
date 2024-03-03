<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Java Module</title>
  <link rel="stylesheet" href="../assets/css/java_Module.css">

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
    padding: 90px 5%;
    width: 100%;
    height: 100vh;
    background: url("../assets/images/backmenu.svg");
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
    <a href="/moduleLanguage" class="bx bx-chevron-left" id="back-btn"></a>
    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">

        <ul class="profile">
            <button><a href="{{ route('profile') }}" class="profile-link">

                    @if (Auth::check() && Auth::user()->profile_photo)
                        <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : '../assets/images/avatar.png' }}"
                            alt="Profile Photo" class="avatar">
                    @else
                        <!-- Placeholder image or default avatar -->
                        <img src="../assets/images/avatar.png" alt="Default Avatar" class="avatar">
                    @endif
                    <h2>{{ Auth::user()->username }}</h2>
                </a></button>
        </ul>

        <li><a href="startmenu">Home</a></li>
        <li><a href="#forums">Forums</a></li>
        <li><a href="Playground">Playground</a></li>
        <li><a href="moduleLanguage">Modules</a></li>
        <li><a href="#leaderboard">Leaderboard</a></li>
        <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

    </ul>

</header>

<section class="space-background">

  <div class="sidenav">
    <h2>Java Module</h2>
    {{-- <br>
    <a target="_top" href="{{ route('JavaDefault') }}"class="active">Learn Java</a>
    <a target="_top" href="{{ route('JavaIntro') }}">Java Introduction</a>
    <a target="_top" href="{{ route('JavaInstall') }}">Java Installation</a>
    <a target="_top" href="{{ route('JavaSyntax') }}">Java Syntax</a>
    
        <br>
        <br>
        <h2>Java Methods</h2>
        <br>
        <a target="_top" href="{{ route('JavaFeatures') }}">JavaScript Features
        </a>
        <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_dis.html">Disadvantages of JavaScript
        </a>
        <br>
        <br>
        <h2>Variables and Data Types</h2>
        <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_bb.html">  The Building Blocks
        </a>
        <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_bb.html">  The Functional Mechanism of JavaScript
        </a>
        <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_csmd.html"> Making Decisions
        </a>
        <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_teje.html"> The Engines of JavaScript Execution

        </a>
      </div> --}}
    



  {{-- <div class="content"> --}}

    {{-- <div id="main">
  
      <h2>Main Content</h2>
      <p>This is the main content area. Replace this with your actual content.</p>
  
    </div> --}}
  </div>
</section>

<script type="text/javascript" src="../assets/js/headermenu.js"></script>

</body>
</html>
