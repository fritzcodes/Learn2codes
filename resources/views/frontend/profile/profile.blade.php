<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Learn2Code</title>
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">

</head>

<body style="background-image: url(assets/images/backlogin.png);">

    <header>
        <a href="{{ route('startmenu') }}" class="bx bx-chevron-left" id="back-btn"></a>
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
        <form method="post" enctype="multipart/form-data" id="formData" class="content-section">
            @csrf
                        <div class=title>
                            <h2>My Profile</h2>
                        </div> 
            <div class="top">

                <div class="details">
                    <div class="contents">
                        <div class="imageContainer" id="imageContainer">
                            <img style="border-radius:50%"
                            src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : 'assets/images/avatar.png' }}"
                            alt="">
                        </div>
                        
                        <div>
                            <div>
                                <h2 id="Username">{{ Auth::user()->username }}</h2>
                            </div>

                            <div class="names">
                                <p id="firstName">{{ Auth::user()->fname }}</p>
                                <p id="lastName">{{ Auth::user()->lname }}</p>  
                            </div>

                            <div class="others">
                                        <p id="Course">{{ Auth::user()->course }}</p>
                                        <p id="year">{{ Auth::user()->year }}</p>
                                        <p id="email">{{ Auth::user()->email }}</p>  
                            </div>                            

                        </div>
                       
                    </div>



                </div>

                <div class="Editprofile">
                    <a href="{{ route('profile.edit') }}" >Edit Profile</a>
                </div>
            </div>
        </form>

        <div class="bottom">
            <a href="{{ route('profile.badge') }}" class="btns">
                <img src="assets/images/badges-btn.svg" class="badges"></img>
            </a>
    
            <a href="{{ route('profile.progress') }}" class="btns">
                <img src="assets/images/Exp-progress-btn.svg" class="Experience"></img>
            </a>
    
            <a href="{{ route('changepassword') }}" class="btns">
                <img src="assets/images/Changepassword.svg" class="Changepassword"></img>
            </a>
        </div>

    </section>

    <script src="assets/js/headermenu.js"></script>
    {{-- <script src="assets/js/fetch.js"></script> --}}
</body>

</html>
