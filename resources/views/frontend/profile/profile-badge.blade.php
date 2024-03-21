<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

                <?php $percentage = 0;
                $language = $item->language;
                ?>
                @foreach ($exp as $exps)
                    @if ($exps->language == $item->language)
                    <?php $percentage += intval($exps->points) ?>
                    @endif
                @endforeach
                <div class="badge {{ $percentage >= 100 ? '' : 'locked' }}">
                    <img src="/images/{{$item->picture}}" alt="Badge 5">
                    <h3>{{$item->language}}</h3>
                    <div class="percentage">
                        <p>{{ $percentage >= 100? '100' : $percentage  }}%</p>
                    </div>
                   
                    @foreach ($claimed as $claimedBadge)
                        <?php $met = true ?>
                        @if ($claimedBadge->language == $item->language)
                            <button class="details-btn" onclick="showDetails('<?php echo $item->picture ?>', '<?php echo $item->language ?>')">View Details</button>
                            <?php $met = false; break; ?>
                         @endif
                       
                    @endforeach
                       @if ($met)
                            <button class="claim-btn" onclick="claimBadge(<?php echo $percentage ?>, <?php echo $id ?>, '<?php echo  $language ?>')">Claim</button>
                       @endif
                    

                </div>


            
                <!-- Badge Details Popup -->
                <div class="badge-details">
                    <div class="details-content">
                        <button class="close-btn" onclick="closeDetails()">&times;</button>
                        <h2>Badge Details</h2>
                        <img src="" alt="Badge Image" class="details-image rounded-circle">
                        
                        <h3 class="details-title">{{ $item->language }}</h3>
                        <p class="details-description"></p>
                        <div class="details-percentage"></div>
                    </div>
                </div>
            @endforeach


        </div>
        <a type="button" href="{{ route('badge.search') }}" class="btn-primary">Check My Badge</a>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/headermenu.js"></script>

    <script type="text/javascript" src="assets/js/claim.js"></script>


</body>

</html>