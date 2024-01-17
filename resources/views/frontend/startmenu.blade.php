<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Menu | Learn2Code</title>
  <link rel="stylesheet" href="assets/css/startmenu.css">

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
  <a href="/" class="bx bx-chevron-left" id="back-btn"></a>
  <div class="bx bx-menu" id="menu-icon"></div>
  
  <ul class="navbar">

    <ul class="profile">
      <button><a href="{{ route('profile') }}" class="profile-link">
      
      @if(Auth::check() && Auth::user()->profile_photo)
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
    <li><a href="#playground">Playground</a></li>
    <li><a href="#modules">Modules</a></li>
    <li><a href="#leaderboard">Leaderboard</a></li>
    {{-- <button class="login-btn" href="{{ route('logout') }}" >Logout</button> --}}
    <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>
    
  </ul>

</header>


  <section class="space-background">
     <div class="content-section">
        <div class="content-container1">
          <a href="#playground" class="content-link">
            <img src="assets/images/playground-btn.svg" alt="Playground" id="playground">
          </a>
        </div>

        <div class="content-container2">
          <a href="#" class="content-link"> <img src="assets/images/leaderboard-btn.svg" alt="Leaderboard" id="leaderboard">
          </a>
        </div>

        <div class="content-container3">
          <a href="#modules" class="content-link">
            <img src="assets/images/module-btn.svg" alt="Modules" id="module">
          </a>
        </div>

        <div class="content-container4">
          <a href="#" class="content-link"> 
            <img src="assets/images/forums-btn.svg" alt="forum" id="forum">
          </a>
        </div>
    </div>
  </section>


<script>
  const header = document.querySelector("header");
const menu = document.querySelector('#menu-icon');
const navbar = document.querySelector('.navbar');
const section = document.querySelector('section');

// Global variable to track the hover state
let isHoverEnabled = true;

// Function to toggle hoverability
function toggleHoverability() {
  section.classList.toggle('no-hover', !isHoverEnabled);
}

// Toggle menu and navbar on menu icon click
menu.onclick = (event) => {
  event.stopPropagation(); // Prevent the click event from reaching the document click event
  navbar.classList.toggle('open');;
  isHoverEnabled = !isHoverEnabled; // Toggle hover state
  toggleHoverability();
};

// Close header when clicking on free space
document.addEventListener('click', function (event) {
  // Check if the clicked element is not part of the header or menu
  if (!header.contains(event.target) && event.target !== menu) {
    // Check if the navbar is open
    if (navbar.classList.contains('open')) {
      // Close the header
      navbar.classList.remove('open');
      isHoverEnabled = true; // Enable hover when closing the menu
      toggleHoverability();
    }
  }
});

</script>

</body>
</html>
