<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code | Our Team</title>

    <link rel="stylesheet" href="assets/css/aboutus.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <script type="text/javascript" src="assets/js/headermenu.js" defer></script>
</head>
<body>
    
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

            <li><a href="startmenu">Home</a></li>
            <li><a href="#forums">Forums</a></li>
            <li><a href="Playground">Playground</a></li>
            <li><a href="#modules">Modules</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
            {{-- <button class="login-btn" href="{{ route('logout') }}" >Logout</button> --}}
            <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

        </ul>

    </header>



	<section class="team">
		<div class="center">
			<h1>Our Team</h1>
		</div>

        <div class="head">
            <ul>
                <li><a href="#" onclick="showDiv('div1', this);" class="active"><i class='bx bxs-group'></i><p>all</p></a></li>
                <li><a href="#" onclick="showDiv('div2', this);"><i class='bx bxs-hard-hat'></i><p>Leaders</p></a></li>
                <li><a href="#" onclick="showDiv('div3', this);"><i class='bx bx-glasses-alt'></i><p>Research Team</p></a></li>
                <li><a href="#" onclick="showDiv('div4', this);"><i class='bx bx-shape-square'></i><p>UI/UX Team</p></a></li>
                <li><a href="#" onclick="showDiv('div5', this);"><i class='bx bx-code-block'></i><p>Development Team</p></a></li>
            </ul>
        </div>
		<div id="div1" class="team-content">
			<div class="box">
				<img src="assets/images/avatar.png">
				<h2>Ricardo Macayan</h2>
				<p>Artist</p>
				<div class="icons">
					<a href="#"><i class="bx bxl-facebook"></i></a>
					<a href="#"><i class="bx bxl-instagram-alt"></i></a>
					<a href="#"><i class="bx bxl-twitter"></i></a>
				</div>
			</div>

			<div class="box">
            <img src="assets/images/avatar.png">
				<h2>David Matthew</h2>
				<p>Artist</p>
				<div class="icons">
					<a href="#"><i class="bx bxl-facebook"></i></a>
					<a href="#"><i class="bx bxl-instagram-alt"></i></a>
					<a href="#"><i class="bx bxl-twitter"></i></a>
				</div>
			</div>

			<div class="box">
            <img src="assets/images/avatar.png">
				<h2>Steph Jobs</h2>
				<p>Artist</p>
				<div class="icons">
					<a href="#"><i class="bx bxl-facebook"></i></a>
					<a href="#"><i class="bx bxl-instagram-alt"></i></a>
					<a href="#"><i class="bx bxl-twitter"></i></a>
				</div>
			</div>

			<div class="box">
            <img src="assets/images/avatar.png">
				<h2>Steph Jobs</h2>
				<p>Artist</p>
				<div class="icons">
					<a href="#"><i class="bx bxl-facebook"></i></a>
					<a href="#"><i class="bx bxl-instagram-alt"></i></a>
					<a href="#"><i class="bx bxl-twitter"></i></a>
				</div>
			</div>
		</div>


        <div id="div2" class="team-content">
			<div class="box">
            <img src="assets/images/avatar.png">
				<h2>Steph Jobs</h2>
				<p>Artist</p>
				<div class="icons">
					<a href="#"><i class="bx bxl-facebook"></i></a>
					<a href="#"><i class="bx bxl-instagram-alt"></i></a>
					<a href="#"><i class="bx bxl-twitter"></i></a>
				</div>
			</div>

			<div class="box">
            <img src="assets/images/avatar.png">
				<h2>David Matthew</h2>
				<p>Artist</p>
				<div class="icons">
					<a href="#"><i class="bx bxl-facebook"></i></a>
					<a href="#"><i class="bx bxl-instagram-alt"></i></a>
					<a href="#"><i class="bx bxl-twitter"></i></a>
				</div>
			</div>

			<div class="box">
            <img src="assets/images/avatar.png">
				<h2>Steph Jobs</h2>
				<p>Artist</p>
				<div class="icons">
					<a href="#"><i class="bx bxl-facebook"></i></a>
					<a href="#"><i class="bx bxl-instagram-alt"></i></a>
					<a href="#"><i class="bx bxl-twitter"></i></a>
				</div>
			</div>

			<div class="box">
            <img src="assets/images/avatar.png">
				<h2>Steph Jobs</h2>
				<p>Artist</p>
				<div class="icons">
					<a href="#"><i class="bx bxl-facebook"></i></a>
					<a href="#"><i class="bx bxl-instagram-alt"></i></a>
					<a href="#"><i class="bx bxl-twitter"></i></a>
				</div>
			</div>
		</div>
	</section>


    <script>
  function showDiv(divId, element) {
    // Hide all team-content divs
    var divs = document.querySelectorAll('.team-content');
    for (var i = 0; i < divs.length; i++) {
        divs[i].style.display = 'none';
    }

    // Show the selected div
    var selectedDiv = document.getElementById(divId);
    if (selectedDiv) {
        selectedDiv.style.display = 'grid';
    }

    // Remove 'active' class from all links
    document.querySelectorAll('.head ul li a').forEach(function(link) {
        link.classList.remove('active');
    });

    // Add 'active' class to the clicked link
    if (element) {
        element.classList.add('active');
    }
}
    </script>

</body>
</html>