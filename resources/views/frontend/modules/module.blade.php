<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Module</title>
    <link rel="stylesheet" href="../assets/css/java_Module.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
        <a ></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">

            <ul class="profile">
                <button><a href="{{ route('profile') }}" class="profile-link">
                        @if (Auth::check() && Auth::user()->profile_photo)
                            <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : '../assets/images/avatar.png' }}"
                                alt="Profile Photo" class="avatar">
                        @else
                            <!-- Placeholder image or default avatar -->
                            <img src="../assets/images/avatar.png" alt="Default Avatar" class="avatar">
                        @endif
                        <h2>{{ Auth::user()->username }}</h2>
                    </a></button>
            </ul>

            <li><a href="{{ route('startmenu') }}">Home</a></li>
            <li><a href="/forums">Forums</a></li>
            <li><a href="{{ route('Playground') }}">Playground</a></li>
            <li><a href="/moduleLanguage">Modules</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
            <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

        </ul>

    </header>

    <section class="space-background">

        <div class="sidenav">
            <h2>{{ $id }} Module</h2>
            @foreach ($data as $item)
                <a target="_top" href="#{{ $loop->index + 1 }}">{{ $item->title }} </a>
            @endforeach



        </div>




        <div class="content" id="content">
            <div id="main">

            </div>
        </div>
    </section>

    <script type="text/javascript" src="../assets/js/headermenu.js"></script>
    <script>
        var bottomReached = false;
        // Get the pathname from the URL
        const pathname = window.location.pathname;

        // Split the pathname by '/'
        const parts = pathname.split('/');

        // Extract the module, language, and number
        const module = parts[1];
        const language = parts[2];
        const number = window.location.hash;
        const activity = module + ", " + language + "," + number;


        document.getElementById('content').onscroll = function() {
            var scrollHeight = document.documentElement.scrollHeight;
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            var clientHeight = document.documentElement.clientHeight;
            // Get the pathname from the URL


            if (!bottomReached && scrollTop + clientHeight >= scrollHeight - 10) {
                var formData = new FormData();
                bottomReached = true;
                const csrfToken = $('meta[name="csrf-token"]').attr('content');

                formData.append('activity', activity);
                formData.append('language', language);
                formData.append('points', 1);


                $.ajax({
                    url: '/exp',
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    processData: false, // Important: Do not process FormData
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Include CSRF token in the headers
                    },
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(xhr) {
                        alert(xhr.responseText);
                    }
                })
            }
        };

        function updateContent() {
            var fragment = window.location.hash;
            var number = fragment.substring(1);
            var newIndex = parseInt(number) - 1;
            var data = {!! json_encode($data) !!};
            var content = data[newIndex].content;
            var trycode = data[newIndex].trycode;
            var addcontent = content;

            if (trycode !== null && trycode.trim() !== "") {
                addcontent += '<br><br> <h2>Example Code</h2>' +
                    '<pre>' + trycode + '</pre><br><br><button><a href="/trycode/' + data[newIndex].id +
                    '">Try Code</a></button>';
            }

            document.getElementById('main').innerHTML = addcontent;
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
