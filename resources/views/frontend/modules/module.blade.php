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
            
    
.dot {
  width: 20px;
  height: 20px;
  background-color: red;
  border-radius: 50%;
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  animation: moveDot 1s ease-in-out forwards;
}

@keyframes moveDot {
  0% {
    bottom: 20%;
    left: 50%;
    transform: translateX(-50%);
  }
  100% {
    bottom: 80%; /* Adjust the value to change the final position */
    left: 10%; /* Adjust the value to change the final position */
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
        table, th, td {
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
  0% { --percentage: 0; }
  100% { --percentage: var(--value); }
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
                <a target="_top" href="#{{ $loop->index + 1 }}#{{ $item->id }}">{{ $item->title }} </a>
            @endforeach



        </div>




        <div class="content" id="content">
            <div id="main">

            </div>
        </div>
        <div class="dot"></div>
    </section>

    <script type="text/javascript" src="../assets/js/headermenu.js"></script>
    <script>
        var modulePercent = {{ $percent }}
        var bottomReached = false;
        

        document.getElementById('content').onscroll = function() {
            var scrollHeight = document.documentElement.scrollHeight;
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            var clientHeight = document.documentElement.clientHeight;
            
            if (!bottomReached && scrollTop + clientHeight >= scrollHeight - 10) {
                
                bottomReached = true;
                window.addEventListener('hashchange', () => {bottomReached = false});
               
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
                console.log(activity);
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

                            if(modulePercent < data[0]){
                                const progressBar = document.getElementById('progressbar');
                                progressBar.style.setProperty('--value', data[0]);
                                modulePercent = data[0]
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
            var data = {!! json_encode($data) !!};
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
