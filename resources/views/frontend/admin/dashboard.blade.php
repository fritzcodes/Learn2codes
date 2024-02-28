<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
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
            <img src="{{Auth::guard('admin')->user()->profile_photo ? asset('images/' . Auth::guard('admin')->user()->profile_photoo) : 'assets/images/avatar.png' }}"
                alt="user" class="user-img">
        @else
            <!-- Placeholder image or default avatar -->
            <img src="../assets/images/avatar.png" alt="user" class="user-img">
        @endif
            {{-- <img src="../assets/images/avatar.png" alt="user" class="user-img"> --}}
            <div>
                <p class="username">{{ Auth::guard('admin')->user()->email }}</p>
                <p>Admin</p>
            </div>
        </div>


        <ul>
            <li>
                <a target="_top" href="{{ route('Dashboard') }}" class='active'>
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
                <a target="_top" href="{{ route('Leaderboard') }}">
                    <i class="bx bxs-trophy"></i>
                    <span class="nav-item">Leaderboard</span>
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
                <a target="_top" href="#">
                    <i class="bx bx-dumbbell"></i>
                    <span class="nav-item">EXP Progress</span>
                </a>
            </li>
            <li>
                <a target="_top" href="#">
                    <i class="bx bxs-medal"></i>
                    <span class="nav-item">Badge</span>
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
<div class="main-content" id="content1">        <!------------------------------------------ dashboard -->  
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">{{ $totalUsers }}</div>
                <div class="cardName">Users</div>
            </div>

            <div class="iconBx">
                <i class="bx bxs-user-account"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">5</div>
                <div class="cardName">Badges</div>
            </div>

            <div class="iconBx">
                <i class="bx bxs-user-badge"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">3,000</div>
                <div class="cardName">Highest EXP</div>
            </div>

            <div class="iconBx">
                <i class="bx bxs-bolt-circle"></i>
            </div>
        </div>

    </div>
    
    <div class="chartsBx">        
        <div class="chart"> <canvas id="chart-1"></canvas> </div>
        <div class="chart"> <canvas id="chart-2"></canvas> </div>
    </div>
</div>

    <script src="../assets/js/admin/admin.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="../assets/js/admin/chartsJS.js"></script>
</body>
</html>