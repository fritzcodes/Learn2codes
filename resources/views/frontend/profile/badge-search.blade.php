<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Learn2Code</title>
   <link rel="stylesheet" href="assets/css/landingBadges.css">
   <link rel="shortcut icon" type="x-icon" href="assets/images/Logo.jpg">


   <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">

   <!-- Add this in your HTML -->
   <style>
      body {
         padding: 90px 10%;
         width: 100%;
         height: 100vh;
         background: url('assets/images/proressbg.svg') no-repeat center center fixed;
         background-size: cover;
         color: var(--text-color);
         overflow-x: hidden;
         z-index: -1;
         background-size: cover;

      }
   </style>

</head>

<body>

   <header>

      <a href="{{ route('profile.badge') }}" class="bx bx-chevron-left" id="back-btn"></a>
      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navbar">

         <ul class="profile">
            <button><a href="{{ route('profile') }}" class="profile-link">

                  @if (Auth::check() && Auth::user()->profile_photo)
                  <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : 'assets/images/avatar.png' }}" alt="Profile Photo" class="avatar">
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
         {{-- <button class="login-btn" href="{{ route('logout') }}" >Logout</button> --}}
         <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

      </ul>

   </header>

   <body>

      <section class="space-background">
         <div id="left-pane">

            <label class="tab">
               <input type="radio" name="tabs" onclick="showTab('tab1')" checked> <span>All</span>
            </label>

            <label class="tab">

               <input type="radio" name="tabs" onclick="showTab('tab2')"> <span>Claimed</span>
            </label>

            <label class="tab">

               <input type="radio" name="tabs" onclick="showTab('tab3')"> <span>Not claimed</span>
            </label>

            <label class="tab">



         </div>

         <div id="tab-content">

            <div id="tab1" class="tab-content active">

               @foreach ($claimed as $claimedBadge)

               <img src="/images/{{ $claimedBadge->picture }}" alt="" class="">

               @endforeach
               @foreach ($notClaimed as $notClaimedBadge)

               <img src="/images/{{ $notClaimedBadge->picture }}" alt="" style="opacity:0.5">

               @endforeach

            </div>

            <div id="tab2" class="tab-content">

               <div class="top-row">
                  @foreach ($claimed as $claimedBadge)

                  <img src="/images/{{ $claimedBadge->picture }}" alt="" class="">

                  @endforeach

               </div>
            </div>


            <div id="tab3" class="tab-content">

               <div class="bottom-row">

                  @foreach ($notClaimed as $notClaimedBadge)

                  <img src="/images/{{ $notClaimedBadge->picture }}" alt="" class="">

                  @endforeach

               </div>

            </div>
         </div>
      </section>

      <script src="assets/js/headermenu.js"></script>
      <script src="assets/js/tabs.js"></script>
      <script src="assets/js/fetchbadge.js"></script>


   </body>

</html>