<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code || Profile</title>
    <link rel="stylesheet" href="assets/css/profile.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

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
            overflow-x: hidden;
            /* Prevent horizontal scrolling */
            z-index: -1;
            /* Behind other content */
            background-size: cover;
        }

        .badges {

            height: 80px;
            width: 180px;
            background: url('assets/images/badges-btn.svg');
            background-size: cover;
            border: transparent;
            margin-left: 55px;
            margin-top: 250px;
            cursor: pointer;

        }


        .badges:hover {
            transform: scale(1.1);
            color: #4169E1;
            font-weight: bold;
            cursor: pointer;
        }



        .Experience {

            height: 80px;
            width: 180px;
            background: url('assets/images/Exp-progress-btn.svg');
            background-size: cover;
            border: transparent;
            margin-left: 100px;
            margin-top: -30px;
            cursor: pointer;
        }


        .Experience:hover {
            transform: scale(1.1);
            color: #4169E1;
            font-weight: bold;
            cursor: pointer;

        }



        .Changepassword {

            height: 80px;
            width: 180px;
            background: url('assets/images/Changepassword.svg');
            background-size: cover;
            border: transparent;
            margin-left: 100px;
            margin-top: -30px;
            cursor: pointer;
        }

        .Changepassword:hover {
            transform: scale(1.1);
            color: #4169E1;
            font-weight: bold;
            cursor: pointer;

        }

        .badge1 {

            cursor: pointer;
        }

        .Experiences {

            cursor: pointer;

        }

        .Passwords {

            cursor: pointer;
        }
    </style>



</head>

<body>

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

            <li><a href="startmenu">Home</a></li>
            <li><a href="#forums">Forums</a></li>
            <li><a href="Playground">Playground</a></li>
            <li><a href="#modules">Modules</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
            {{-- <button class="login-btn" href="{{ route('logout') }}" >Logout</button> --}}
            <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

        </ul>

    </header>




    <section class="space-background">
        <div class="heading">My Profile</div>
        <div class="headlines">______</div>

        <form method="post" enctype="multipart/form-data" id="formData">
            @csrf
            <div class="imageContainer" id="imageContainer">

                <img id="displayedImage"class="displayedImage" src="assets/images/avatar.png"
                    alt="Image to be displayed">
            </div>
            <br>

            <label for="firstName" class="labelread1">First Name:</label>
            <div class="datalabels1">
                <input type="text" id="firstName" class="dataLabel1" readonly autocomplete="off"
                    value="{{ Auth::user()->fname }}">
            </div>

            <label for="lastName" class="labelread2" placeholder="">Last Name:</label>
            <div class="datalabels2">
                <input type="text" id="lastName" class="dataLabel2" readonly autocomplete="off"
                    value="{{ Auth::user()->lname }}">
            </div>


            <label for="Course" class="labelread3">Course :</label>
            <div class="datalabels3">
                <input type="text" id="Course" class="dataLabel3" readonly autocomplete="off"
                    value="{{ Auth::user()->course }}" placeholder="Your course?">
            </div>

            <label for="year" class="labelread4">Year Level:</label>
            <div class="datalabels4">
                <input type="text" id="year" class="dataLabel4" readonly autocomplete="off"
                    value="{{ Auth::user()->year }}">
            </div>


            <label for="Username" class="labelread5">Username:</label>
            <div class="datalabels5">
                <input type="text" id="Username" class="dataLabel5" readonly autocomplete="off"
                    value="{{ Auth::user()->username }}">
            </div>

            <label for="email" class="labelread6">Email Add:</label>
            <div class="datalabels6">
                <input type="text" id="email" class="dataLabel6" readonly autocomplete="off"
                    value="{{ Auth::user()->email }}">
            </div>
        </form>
        <a href="{{ route('profile.edit') }}" class="Editprofile">Edit Profile</a>


        <a href="{{ route('profile.badge') }}" class="badge1">
            <button class="badges"></button>
        </a>

        <a href="{{ route('profile.progress') }}" class="Experiences">
            <button class="Experience"></button>
        </a>

        <a href="{{ route('changepassword') }}">
            <button class="Changepassword" class="Passwords"></button>
        </a>



    </section>

    <script src="assets/js/headermenu.js"></script>
    {{-- <script src="assets/js/fetch.js"></script> --}}
</body>

</html>
