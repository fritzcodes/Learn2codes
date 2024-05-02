<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard | Learn2Code</title>
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">
    <link rel="stylesheet" href="assets/css/leaderboard.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/headermenu.js" defer></script>
</head>

<body style="background-image: url(/assets/images/Backlogin.png);">

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
                    <td class="number-column">Status</td>
                </tr>
            </thead>
            <tbody id="leaderboardTableBody">
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
                    @php
                    $new_last_online_at = date(
                    'Y-m-d H:i:s',
                    strtotime($userPoint['status'] . ' +2 minutes'),
                    );
                    @endphp
                    <td>{{ $new_last_online_at > now() ? 'Online' : \Illuminate\Support\Carbon::parse($userPoint['status'])->diffForHumans() }}
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
<script>
    function isoStringDate(lastOnline) {
        var date = new Date(lastOnline);

        // Get the individual components
        var year = date.getFullYear();
        var month = ('0' + (date.getMonth() + 1)).slice(-2); // Month is zero-based, so add 1
        var day = ('0' + date.getDate()).slice(-2);
        var hours = ('0' + date.getHours()).slice(-2);
        var minutes = ('0' + date.getMinutes()).slice(-2);
        var seconds = ('0' + date.getSeconds()).slice(-2);
        var milliseconds = ('00' + date.getMilliseconds()).slice(-3);

        // Format the date string
        return `${year}-${month}-${day}T${hours}:${minutes}:${seconds}.${milliseconds}Z`;
    }

    function fetchDataAndUpdateTable() {
        $.ajax({
            url: '/leaderboard/data',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var currentTime = currentDate.toISOString();

                let leaderboardHtml = "";

                data.forEach((userPoint, index) => {
                    var lastOnlineAt = new Date(userPoint.status);
                    var lastOnlineAt2 = new Date(userPoint.status);
                    leaderboardHtml += `
                    <tr>
                        <td>${index + 1}</td>
                        <td id="profile-img">
                            <img src="${userPoint.profile_photo ? '/images/' + userPoint.profile_photo : '/assets/images/avatar.png'}">
                            <p>${userPoint.username}</p>
                        </td>
                        <td>${userPoint.badge || 0}</td>
                        <td>${userPoint.module || 0}</td>
                        <td>${userPoint.quiz || 0}</td>
                        <td>${userPoint.exercise || 0}</td>
                        <td>${userPoint.total_points || 0}</td>
                        <td>${isoStringDate(lastOnlineAt) > currentTime  ? 'Online' : moment.utc(isoStringDate(lastOnlineAt2)).fromNow()}</td>
                    </tr>
                `;
                });

                // Update the leaderboard table with the new HTML
                $('#leaderboardTableBody').html(leaderboardHtml);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText)
            }
        });
    }

    // Call fetchDataAndUpdateTable function immediately to load leaderboard on page load
    fetchDataAndUpdateTable();

    // Refresh the data every 3 seconds
    setInterval(fetchDataAndUpdateTable, 3000);
</script>




</html>