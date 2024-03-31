<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Module</title>
    <link rel="stylesheet" href="../assets/css/java_Module.css">
    <link rel="shortcut icon" type="x-icon" href="../assets/images/Logo.jpg">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
    .dot {
    display: none; /* Initially hide the dot */
    width: 20px;
    height: 20px;
    background-color: rgba(0, 0, 255, .5); /* Blue color for the dot */
    border-radius: 50%;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    animation: moveDot 1s ease-in-out forwards, envelopDot 0.5s ease-in-out 1.5s forwards;
}

.dot-spirit {
    display: none; /* Initially hide the dot */
    width: 20px;
    height: 20px;
    background-color: rgba(0, 0, 255, .2); /* Blue color for the dot */
    border-radius: 50%;
    position: absolute;
    bottom: 20%;
    left: 50%;
    transform: translateX(-50%);
    animation: moveDot 1s ease-in-out forwards .05s;
}

.dot-spirit:nth-child(1) {
  animation: moveDot 1s ease-in-out .05s;/* Spirit dot 1 animation */
}

.dot-spirit:nth-child(2) {
  animation: moveDot 1s ease-in-out .07s; /* Spirit dot 2 animation */
}

.dot-spirit:nth-child(3) {
  animation: moveDot 1s ease-in-out .09s; /* Spirit dot 3 animation */
  
}
.dot-spirit:nth-child(4) {
  animation: moveDot 1s ease-in-out .11s; /* Spirit dot 3 animation */
}
.dot-spirit:nth-child(5) {
  animation: moveDot 1s ease-in-out .13s; /* Spirit dot 3 animation */
}
@keyframes moveDot {
    0% {
        bottom: 20%;
        left: 50%;
        transform: translateX(-50%);
    }
    100% {
    /* Calculate the position of the progress bar */
    bottom: var(--progress-bar-bottom);
    left: var(--progress-bar-left);
    /* Adjust the value to fine-tune the final position */
  }
}

@keyframes envelopDot {
    0% {
        width: 20px;
        height: 20px;
        border-radius: 50%;
    }
    50% {
        width: 40px; /* Increase size to form droplet shape */
        height: 60px; /* Increase height to form droplet shape */
        border-radius: 50% 50% 0 0; /* Adjust border radius to form droplet shape */
    }
    100% {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        opacity: 0; /* Fade out dot at the end of animation */
    }
}



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

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            padding-left: 20px;
            padding-right: 20px;
        }



        @keyframes animateBackground {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 100% 100%;
            }
        }

        @keyframes progress {
            0% {
                --percentage: 0;
            }

            100% {
                --percentage: var(--value);
            }
        }

        @property --percentage {
            syntax: '<number>';
            inherits: true;
            initial-value: 0;
        }

        [role="progressbar"] {
            --percentage: var(--value);
            --primary: #369;
            --secondary: #adf;
            --size: 300px;
            animation: progress 2s 0.5s forwards;
            width: var(--size);
            aspect-ratio: 1;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            display: grid;
            place-items: center;
        }

        [role="progressbar"]::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: conic-gradient(var(--primary) calc(var(--percentage) * 1%), var(--secondary) 0);
            mask: radial-gradient(white 55%, transparent 0);
            mask-mode: alpha;
            -webkit-mask: radial-gradient(#0000 55%, #000 0);
            -webkit-mask-mode: alpha;
        }

        [role="progressbar"]::after {
            counter-reset: percentage var(--value);
            content: counter(percentage) '%';
            font-family: Helvetica, Arial, sans-serif;
            font-size: 10px;
            color: var(--primary);
        }



        #youtube {
            z-index: 2;
            display: block;
            width: 100px;
            height: 70px;
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: red;
            border-radius: 50% / 11%;
            transition: transform 0.5s;
        }

        #youtube:hover,
        #youtube:focus {
            transform: scale(1.1);
        }

        #youtube::before {
            content: "";
            display: block;
            position: absolute;
            top: 7.5%;
            left: -6%;
            width: 112%;
            height: 85%;
            background: red;
            border-radius: 9% / 50%;
        }

        #youtube::after {
            content: "";
            display: block;
            position: absolute;
            top: 20px;
            left: 40px;
            width: 45px;
            height: 30px;
            border: 15px solid transparent;
            box-sizing: border-box;
            border-left: 30px solid white;
        }

        #youtube span {
            font-size: 0;
            position: absolute;
            width: 0;
            height: 0;
            overflow: hidden;
        }
    </style>

</head>

<body>
    <header>
        <div id="progressbar" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="--value: {{ $percent }}; height: 50px; width: 50px; margin-left: 20px;">
        </div>

        <a></a>

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

            <li><a href="{{ route('startmenu') }}">Home</a></li>
            <li><a href="/forums">Forums</a></li>
            <li><a href="/Playground">Playground</a></li>
            <li><a href="/moduleLanguage">Modules</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
            <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

        </ul>

    </header>

    <section class="space-background">

        <div class="sidenav">

            <h2>{{ $id }} Module</h2>
            @foreach ($data as $item)
            <a target="_top" href="#{{ $loop->index + 1 }}#{{ $item->id }}">{{ $item->title }} </a>
            @endforeach



        </div>




        <div class="content" id="content">
            <div id="main">

            </div>
        </div>

    </section>

    <div class="container">
        <div class="dot" id="dot"></div>
        <div class="dot-spirit" id="dotSpirit1"></div>
        <div class="dot-spirit" id="dotSpirit2"></div>
        <div class="dot-spirit" id="dotSpirit3"></div>
        <div class="dot-spirit" id="dotSpirit4"></div>

    </div>

    <script type="text/javascript" src="../assets/js/headermenu.js"></script>
    <script>
        var modulePercent = {{$percent}}
         
        var bottomReached = false;


        document.getElementById('content').onscroll = function() {
            var content = document.getElementById('content');
            var scrollHeight = content.scrollHeight;
            var scrollTop = content.scrollTop;
            var clientHeight = content.clientHeight;

            if (!bottomReached && scrollTop + clientHeight >= scrollHeight - 10) {

                bottomReached = true;
                window.addEventListener('hashchange', () => {
                    bottomReached = false
                });

                var fragments = window.location.hash;
                var numbers = fragments.substring(2).substring(1);

                // Get the pathname from the URL
                var pathname = window.location.pathname;

                // Split the pathname by '/'
                var parts = pathname.split('/');

                // Extract the module, language, and number
                var module = parts[1];
                var language = parts[2];
                var number = window.location.hash;
                var activity = module + ", " + language + ", " + numbers;
                
                var formData = new FormData();

                var csrfToken = $('meta[name="csrf-token"]').attr('content');

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
                        if (modulePercent < data[0]) {
                            const dot = document.querySelector('.dot');
                            const dot1 = document.getElementById('dotSpirit1');
                            const dot2 = document.getElementById('dotSpirit2');
                            const dot3 = document.getElementById('dotSpirit3');
                            const dot4 = document.getElementById('dotSpirit4');

                            const progressBar = document.getElementById('progressbar');

                            // Get the position of the progress bar relative to the viewport
                            const progressBarRect = progressBar.getBoundingClientRect();

                            // Calculate the bottom and left positions of the progress bar
                            const progressBarBottom = window.innerHeight - progressBarRect.bottom;
                            const progressBarLeft = progressBarRect.left;

                            // Set the custom properties for the final position of the dot animation
                            document.documentElement.style.setProperty('--progress-bar-bottom', (progressBarBottom + 15) + 'px');
                            document.documentElement.style.setProperty('--progress-bar-left', (progressBarLeft + 30) + 'px');

                            dot.style.display = 'block';
                            // Trigger the animation
                            
                            dot.style.animationPlayState = 'running';
                            dot1.style.display = 'block';
                            dot2.style.display = 'block';
                            dot3.style.display = 'block';
                            dot4.style.display = 'block';
                            // Trigger the animation
                            
                            dot.style.animationPlayState = 'running';
                            
                            dot.addEventListener('animationend', function() {

                                // Hide the dot after animation ends
                                dot.style.display = 'none';
                                dot1.style.display = 'none';
                                dot2.style.display = 'none';
                                dot3.style.display = 'none';
                                dot4.style.display = 'none';
                                const progressBar = document.getElementById('progressbar');
                                
                                progressBar.style.animation = 'none';


                                setTimeout(() => {
                                    progressBar.style.setProperty('--value', data[0]);
                                    progressBar.style.animation = 'progress 2s 0.5s forwards';
                                }, 100);
                                modulePercent = data[0]
                            }, {
                                once: true
                            });


                        }

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
            var data = {!!json_encode($data) !!};
            console.log(data);
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

            window.addEventListener('hashchange', updateContent);
        }

        // Call onHashChange to start listening for hash changes
        onHashChange();

        // Call updateContent initially to update content based on the initial hash
        updateContent();
    </script>
</body>

</html>