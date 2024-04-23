<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>
    <link rel="stylesheet" href="../assets/css/Admin.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- -----------SIDEBAR------------ -->
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <span>Learn2Code</span>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>


        <div class="user">
            @if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->profile_photo)
            <img src="{{Auth::guard('admin')->user()->profile_photo ? asset('images/' . Auth::guard('admin')->user()->profile_photoo) : 'assets/images/avatar.png' }}" alt="user" class="user-img">
            @else
            <!-- Placeholder image or default avatar -->
            <img src="../assets/images/avatar.png" alt="user" class="user-img">
            @endif
            {{-- <img src="../assets/images/avatar.png" alt="user" class="user-img"> --}}
            <div>
                <p class="username">{{ Auth::guard('admin')->user()->username }}</p>
                <p>Admin</p>
            </div>
        </div>


        <ul>
            <li>
                <a target="_top" href="{{ route('Dashboard') }}">
                    <i class="bx bxs-dashboard"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
            </li>
            <li>
                <a target="_top" href="{{ route('ManageUser') }}">
                    <i class="bx bxs-user"></i>
                    <span class="nav-item">Manage Users</span>
                </a>
            </li>
            <li>
                <a target="_top" href="{{ route('Leaderboard') }}" class='active'>
                    <i class="bx bxs-trophy"></i>
                    <span class="nav-item">Leaderboard</span>
                </a>
            </li>
            <li>
                <a target="_top" href="/admin/language">
                    <i class="bx bxs-select-multiple"></i>
                    <span class="nav-item">Add Language</span>
                </a>
            </li>
            <li>

                <a target="_top" href="{{ route('Question') }}">
                    <i class="bx bxs-hourglass-top"></i>
                    <span class="nav-item">Quiz</span>
                </a>
            </li>
            <li>
                <a target="_top" href="#">
                    <i class="bx bxs-chat"></i>
                    <span class="nav-item">Forum</span>
                </a>
            </li>
            <li>
                <a target="_top" href="{{ route('addModule') }}">
                <i class='bx bxs-book-reader'></i>
                    <span class="nav-item">Module</span>
                </a>
            </li>
            <li>
                <a target="_top" href="/admin/exercise">
                    <i class="bx bx-dumbbell"></i>
                    <span class="nav-item">Exercise</span>
                </a>
            </li>
            <li class="Logout">
                <a target="_top" href="{{ route('adminLogout') }}">
                    <i class="bx bxs-exit"></i>
                    <span class="nav-item">Logout</span>
                </a>
            </li>
        </ul>

    </div>

<!-- -----------MAIN CONTENT------------ -->
<div class="main-content">     <!----------------------- leaderboards --> 
    <div class="table">
        <div class="tablebg">
            <div class="heading">
                <h2>Leaderboard</h2>
                <input class="search" placeholder="Search" id="search" onkeyup="search()">
            </div>
            <table class="leaderboard">
                <thead>
                    <td class="number-column">#</td>
                    <td class="medium-column">Username</td>
                    <td class="medium-column">FirstName</td>
                    <td class="medium-column">LastName</td>  
                    <td class="number-column">Badge</td>
                    <td class="number-column">Module</td>
                    <td class="number-column">Quiz</td>
                    <td class="number-column">Exercise</td>
                    <td class="number-column">Total EXP</td>         
                </thead>
                <tbody>
                    @foreach ($userPoints as $index => $userPoint)
                    <tr>
                        <td id="{{ $index == 0 ? 'winner' : ($index == 1 ? 'runner-up' : ($index == 2 ? 'second-runner-up' : '')) }}">{{ $index + 1 }}</td>
                        <td id="profile-img">
                            <img src="{{$userPoint['profile_photo'] ? asset('/images/' . $userPoint['profile_photo']) : '/assets/images/avatar.png' }}">
                            <p>{{ $userPoint['username'] }}</p>
                        </td>
                        <td>{{ $userPoint['fname']}}</td>
                        <td>{{ $userPoint['lname']}}</td>
                        <td>{{ $userPoint['badge'] ?? 0}}</td>
                        <td>{{ $userPoint['module'] ?? 0}}</td>
                        <td>{{ $userPoint['quiz'] ?? 0 }}</td>
                        <td>{{ $userPoint['exercise'] ?? 0}}</td>
                        <td>{{ $userPoint['total_points'] ?? 0}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>    
</div>


    <script src="../assets/js/admin/admin.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

    <script>
        function search() {
            var text = document.getElementById('search').value.toLowerCase();
            var rows = document.querySelectorAll('.leaderboard tbody tr');

            rows.forEach(function(row) {
                var match = false;
                row.querySelectorAll('td').forEach(function(cell) {
                    if (cell.textContent.toLowerCase().includes(text)) {
                        match = true;
                    }
                });
                if (match) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>