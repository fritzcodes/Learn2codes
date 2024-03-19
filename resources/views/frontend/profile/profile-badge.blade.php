<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>
    <link rel="stylesheet" href="assets/css/Badges.css">

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
            z-index: -1;
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
            <li><a href="Playground">Playground</a></li>
            <li><a href="moduleLanguage">Modules</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
            {{-- <button class="login-btn" href="{{ route('logout') }}" >Logout</button> --}}
            <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

        </ul>

    </header>


    <section class="space-background">
        <h1 class="title">LIST BADGE COLLECTION</h1>

        <div class="container">

            <!-- Badge 1 -->
            @foreach ($data as $item)
                <div class="badge">
                    <img src="/images/{{$item->picture}}" alt="Badge 1">
                    <h3>{{$item->language}}</h3>
                    <div class="percentage">
                        <p>100%</p>
                    </div>
                    <button class="details-btn" onclick="showDetails(0)">View Details</button>
                    <button class="claim-btn" onclick="claimBadge(0)" disabled  >Claim</button>
                </div>
                <div class="badge locked">
                    <img src="assets/images/c.png" alt="Badge 5">
                    <h3>C Rookie Badge</h3>
                    <div class="percentage">
                        <p>90%</p>
                    </div>
                    <button class="details-btn" onclick="showDetails(4)">View Details</button>
                    <button class="claim-btn" onclick="claimBadge(4)">Claim</button>
                </div>
        
            @endforeach



            




            <!-- Badge Details Popup -->
            <div class="badge-details">
                <div class="details-content">
                    <button class="close-btn" onclick="closeDetails()">&times;</button>
                    <h2>Badge Details</h2>
                    <img src="" alt="Badge Image" class="details-image">
                    <h3 class="details-title"></h3>
                    <p class="details-description"></p>
                    <div class="details-percentage"></div>
                </div>
            </div>


        </div>
        <a type="button" href="{{ route('badge.search') }}" class="btn-primary">Check My Badge</a>

    </section>

    <script type="text/javascript" src="assets/js/headermenu.js"></script>
    <script type="text/javascript" src="assets/js/claim.js"></script>

</body>

</html>
