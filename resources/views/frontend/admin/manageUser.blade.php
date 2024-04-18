<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
                <a target="_top" href="{{ route('Dashboard') }}">
                    <i class="bx bxs-dashboard"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
            </li>
            <li>
                <a target="_top" href="{{ route('ManageUser') }}" class='active'>
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
<div class="main-content">     <!---------------------- manage users --> 
    <div class="table">
        <div class="tablebg">
            <div class="heading">
                <h2>All Users</h2>
                <input class="search" placeholder="Search" id="search" onkeyup="search()">
                <a></a>
            </div>
            <table class="manage-user">
                <thead>
                    <tr>
                        <td>User ID</td>
                        <td>FirstName</td>
                        <td>LastName</td>  
                        <td>Username</td>
                        <td>Year</td>
                        <td>Course</td>
                        <td>Action</td>        
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $use )
                    <tr>
                        <td>{{$use['id']}}</td>
                        <td>{{$use['fname']}}</td>
                        <td>{{$use['lname']}}</td>
                        <td>{{$use['username']}}</td>
                        <td>{{$use['year']}}</td>
                        <td>{{$use['course']}}</td>
                        <td class="ved">
                            <i class="bx bxs-show"></i>
                            <i class="bx bxs-edit"></i>
                            <i class="bx bxs-trash"></i>
                        </td>
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
            var rows = document.querySelectorAll('.manage-user tbody tr');

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