<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn2Code</title>
  <link rel="stylesheet" href="assets/css/Edit.css">

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
	background: url('assets/images/proressbg.svg') no-repeat center center fixed;
	background-size: cover;
	color: var(--text-color);
	overflow-x: hidden; /* Prevent horizontal scrolling */
	z-index: -1; /* Behind other content */
	background-size: cover;  
	}
</style>

</head>
<body>

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


 <section class="space-background">

<body>

	<div class="heading">Edit Profile</div> 
		<div class="heading">Edit Profile</div> 
	<div class="headline">______</div>
	<div class="profile-icon" onclick="openFileInput()">
    	<span></span>
        </div>


	<input type="file" class="profile-image" accept="image/*" onchange="previewImage()" />
	<div class="cancel-button" onclick="cancelUpload()"></div>	
    	</div>

	<label class="label1" for="firstname">First Name:</label>
    	<input class="firstname" type="text" id="firstname" placeholder="First Name?" value="{{ Auth::user()->fname }}"
		name="name" required>
	
	<label class="label2" for="lastname">Last Name:</label>
    	<input class="lastname" type="text" id="name" placeholder="Last Name?" value="{{ Auth::user()->lname }}"
		name="name" required>
	<br>
	<label class="label3" for="course">Course:</label>
    	<input class="course" type="text" id="course" placeholder="Course?"  value="{{ Auth::user()->course }}" name="course" required>>
	
	
        <label class="label4"for="Years">Year Level:</label>
	<select class="Years" id="Years" onchange="showYear()">
	<option class="option1" value="{{ Auth::user()->year }}">---Select Year---</option>
    	<option class="option1" value="1st Year"
		{{ Auth::user()->year == '1st Year' ? 'selected' : '' }}>1st Year</option>
    	<option class="option1"value="2nd Year"
		{{ Auth::user()->year == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
    	<option class="option1"value="3rd Year"
		{{ Auth::user()->year == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
    	<option class="option1"{{ Auth::user()->year == '4th Year' ? 'selected' : '' }}>4th Year</option>
	</select>
        
	<label class="label5" for="username">Username:</label>
    	<input class="username" type="text" id="username" placeholder="Your Username?"  
		value="{{ Auth::user()->username }}" name="username" required>
  	
	<label class="label6" for="Email">Email:</label>
    	<input class="Email" type="text" id="Email" placeholder="Your Email?" value="{{ Auth::user()->email }}" name="email">
		<input type="hidden" name="id" value="{{ Auth::user()->id }}" required>


	<button class="submit-button" onclick="submitForm()">Save</button>
    	<button class="reset-button" onclick="resetForm()">Reset</button>

    	<!-- Verification Message -->
    	<div class="verification-message" id="verification-message" style="display: none;"> Save successfully!</div>
	</div>
		
</section>




</body>
</html>

