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

</head>
<body>

<header>
  <a href="Indexlanding_profile.html" class="bx bx-chevron-left" id="back-btn"></a>
  <div class="bx bx-menu" id="menu-icon"></div>
  <ul class="navbar open">
 
    <li class="profile"><button><img src="avatar.png" alt="Avatar" class="avatar"><h2>Garen Damacia</h2></button></li>
    <li><a href="#home">Home</a></li>
    <li><a href="#forums">Forums</a></li>
    <li><a href="#playground">Playground</a></li>
    <li><a href="#modules">Modules</a></li>
    <li><a href="#leaderboard">Leaderboard</a></li>
    <li><button class="login-btn">Login</button></li>
  

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
    	<input class="firstname" type="text" id="firstname" placeholder="Imong ngalan?">
	
	<label class="label2" for="lastname">Last Name:</label>
    	<input class="lastname" type="text" id="name" placeholder="Your Last Name?">
	<br>
	<label class="label3" for="course">Course:</label>
    	<input class="course" type="text" id="course" placeholder="Your Course?">
	
	
        <label class="label4"for="Years">Year Level:</label>
	<select class="Years" id="Years" onchange="showYear()">
	<option class="option1" value="1">Your Year Level?</option>
    	<option class="option1" value="1">1st Year</option>
    	<option class="option1"value="2">2nd Year</option>
    	<option class="option1"value="3">3rd Year</option>
    	<option class="option1"value="4">4th Year</option>
	</select>
        
	<label class="label5" for="username">Username:</label>
    	<input class="username" type="text" id="username" placeholder="Your Username?">
  	
	<label class="label6" for="Email">Email:</label>
    	<input class="Email" type="text" id="Email" placeholder="Your Email?">


	<button class="submit-button" onclick="submitForm()">Save</button>
    	<button class="reset-button" onclick="resetForm()">Reset</button>

    	<!-- Verification Message -->
    	<div class="verification-message" id="verification-message" style="display: none;"> Save successfully!</div>
	</div>
		
</section>

<script src="assets/js/headermenu.js"></script>
<script src="assets/js/profileEdit.js"></script>


</body>
</html>

