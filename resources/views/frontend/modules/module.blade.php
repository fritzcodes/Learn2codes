<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Home</title>
    <link rel="stylesheet" href="../assets/css/java_Module.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            padding: 90px 5%;
            width: 100%;
            height: 100vh;
            background: url("../assets/images/backmenu.svg");
            color: var(--text-color);
            overflow-x: hidden;
            /* Prevent horizontal scrolling */
            z-index: -1;
            /* Behind other content */
            background-size: cover;
            animation: animateBackground 20s linear infinite;
            /* Adjust as needed */
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
        <a href="moduleLanguage" class="bx bx-chevron-left" id="back-btn"></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">

            <ul class="profile">
                <button><a href="{{ route('profile') }}" class="profile-link">

                        @if (Auth::check() && Auth::user()->profile_photo)
                        <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : '../assets/images/avatar.png' }}" alt="Profile Photo" class="avatar">
                        @else
                        <!-- Placeholder image or default avatar -->
                        <img src="../assets/images/avatar.png" alt="Default Avatar" class="avatar">
                        @endif
                        <h2>{{ Auth::user()->username }}</h2>
                    </a></button>
            </ul>

            <li><a href="startmenu">Home</a></li>
            <li><a href="#forums">Forums</a></li>
            <li><a href="Playground">Playground</a></li>
            <li><a href="moduleLanguage">Modules</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
            <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

        </ul>

    </header>

    <section class="space-background">

        <div class="sidenav">
            <h2>{{ $id }} Tutorial</h2>
            @foreach ($data as $item)
                <a target="_top" href="#{{ $loop->index + 1 }}">{{ $item->title }} </a>
            @endforeach

           

        </div>




        <div class="content">
            <div id="main">
            </div>
        </div>
    </section>

    <script type="text/javascript" src="../assets/js/headermenu.js"></script>
    <script>
       
       function updateContent() {
        var fragment = window.location.hash;
        var number = fragment.substring(1);
        var newIndex = parseInt(number) - 1;
        var data = {!! json_encode($data) !!}; 
        var content = data[newIndex].content;
        document.getElementById('main').innerHTML = content;
    }

    // Function to execute updateContent when the hash changes
    function onHashChange() {
        // Execute updateContent whenever the hash changes
        window.addEventListener('hashchange', updateContent);
    }

    // Call onHashChange to start listening for hash changes
    onHashChange();

    // Call updateContent initially to update content based on the initial hash
    updateContent();
    </script>
</body>

</html>