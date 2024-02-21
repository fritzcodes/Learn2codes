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
            <img src="../assets/images/avatar.png" alt="user" class="user-img">
            <div>
                <p class="username">David Matthew Borromeo</p>
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
                <a target="_top" href="#">
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
                <input class="search" placeholder="Search" id="search">
                <a href="#" class="action">View All</a>
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
                    <tr>
                        <td id="gold">1</td>
                        <td>Anita Maxx Wynn</td>
                        <td>David Matthew</td>
                        <td>Borromeo</td>
                        <td>5</td>
                        <td>10 Exp</td>
                        <td>10 Exp</td>
                        <td>10 Exp</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td id="silver">2</td>
                        <td>KAKASHI</td>
                        <td>Fritz</td>
                        <td>Retiza</td>
                        <td>3</td>
                        <td>10 Exp</td>
                        <td>5 Exp</td>
                        <td>10 Exp</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td id="bronze">3</td>
                        <td>GOJO</td>
                        <td>Shen</td>
                        <td>Remandaban</td>
                        <td>2</td>
                        <td>5 Exp</td>
                        <td>5 Exp</td>
                        <td>10 Exp</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>balagbag magmahal</td>
                        <td>Gian</td>
                        <td>Isangga</td>
                        <td>0</td>
                        <td>5 Exp</td>
                        <td>5 Exp</td>
                        <td>10 Exp</td>
                        <td>20</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    
</div>

    <script src="../assets/js/admin/admin.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

</body>
</html>