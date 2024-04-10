<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>Leaderboard | Learn2Code</title>

    <link rel="stylesheet" href="assets/css/leaderboard.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <script type="text/javascript" src="headermenu.js" defer></script>
</head>

<body>

    <header>
        <a href="startmenu" class="bx bx-chevron-left" id="back-btn"></a>
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

            <li><a href="/startmenu">Home</a></li>
            <li><a href="/forum">Forums</a></li>
            <li><a href="/Playground">Playground</a></li>
            <li><a href="/module/moduleLanguage">Modules</a></li>
            <li><a href="/leaderboard">Leaderboard</a></li>
            <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

        </ul>

    </header>

    <div class="leaderboard">
        <div class="description">
            <h2>Learn2Code Leaderboard Rankings</h2>
            <p>Prove who's the best!</p>
            <input id="search" class="search" placeholder="Search" oninput="search()">
        </div>
        <table>
            <thead>
                <tr>
                    <td></td>
                    <td class="medium-column">Username</td>
                    <td class="number-column">Badge</td>
                    <td class="number-column">Module</td>
                    <td class="number-column">Quiz</td>
                    <td class="number-column">Exercise</td>
                    <td class="number-column">Total EXP</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($userPoints as $index => $userPoint)


                <tr>
                    <td id="{{ $index == 0 ? 'winner' : ($index == 1 ? 'runner-up' : ($index == 2 ? 'second-runner-up' : '')) }}">{{ $index + 1 }}</td>
                    <td><img src="{{$userPoint['profile_photo'] ? asset('/images/' . $userPoint['profile_photo']) : '/assets/images/avatar.png' }}">
                        <p>{{ $userPoint['username'] }}</p>
                    </td>
                    <td>{{ $userPoint['badge'] ?? 0}}</td>
                    <td>{{ $userPoint['module'] ?? 0}}</td>
                    <td>{{ $userPoint['quiz'] ?? 0 }}</td>
                    <td>{{ $userPoint['exercise'] ?? 0}}</td>
                    <td>{{ $userPoint['total_points'] ?? 0}}</td>
                </tr>

                <!-- <tr>
                        <td id="runner-up">2</td>
                        <td><img src="/admin/avatar.jpg"><p> Lily Simons</p></td>
                        <td>4</td>
                        <td>10 EXP</td>
                        <td>20 EXP</td>
                        <td>30 EXP</td>
                        <td>60 EXP</td>
                    </tr>
                    
                    <tr>
                        <td id="second-runner-up">3</td>
                        <td><img src="/admin/avatar.jpg"><p> Tom Higgle</p></td>
                        <td>4</td>
                        <td>10 EXP</td>
                        <td>20 EXP</td>
                        <td>30 EXP</td>
                        <td>60 EXP</td>
                    </tr> -->
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</body>
<script>
    function search() {
        var text = document.getElementById('search').value;
        const tr = document.getElementsByTagName('tr');
        for (let i = 1; i < tr.length; i++) {
            if (!tr[i].children[1].children[1].innerHTML.toLowerCase().includes(
                    text.toLowerCase()
                )) {
                tr[i].style.display = 'none';
            } else {
                tr[i].style.display = '';
            }
        }
    }
</script>

</html>