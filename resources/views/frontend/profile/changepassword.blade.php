<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn2Code</title>
  <link rel="stylesheet" href="assets/css/password.css">
  <link rel="stylesheet" href="assets/css/ChangePassword.css">
  

<link rel="stylesheet"
   href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

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


<body>
 <section class="space-background">
   

<div class="form-container">
    <h2 class="heading">Change My Password</h2>
    
    <form id="passwordForm">
        <label class="label1" for="currentPassword">Current Password:</label>
        <input class="current" type="password" id="currentPassword" required>

        <label class="label2" for="newPassword">New Password:</label>
        <input class="new" type="password" id="newPassword" required>

        <label class="label3" for="confirmPassword">Confirm Password:</label>
        <input class="Confirm" type="password" id="confirmPassword" required>

        <button class="button" type="button" onclick="changePassword()">CONFIRM</button>
    </form>
</div>

		<div class="container">
			<div class="stars"></div>
			<div class="planet">
				<div class="shadow"></div>
			</div>
			<div class="astronaut">
				<div class="tank center"></div>
					<div class="suit center">
						<div class="helmet center"></div>
						<div class="buttons center"></div>
						<div class="hand-l"></div>
						<div class="hand-r"></div>
						<div class="leg-l"></div>
						<div class="leg-r"></div>
						<div class="pipe"></div>
					</div>
			</div>
		</div>


</section>

<script src="assets/js/headermenu.js"></script>
<script src="assets/js/ChangePassword.js"></script>

</body>
</html>

