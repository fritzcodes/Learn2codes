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
                <a target="_top" href="#">
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
                <input class="search" placeholder="Search" id="search">
                <a href="#" class="action">View All</a>
            </div>
            <table class="manage-user">
                <thead>
                    <td>Username</td>
                    <td>FirstName</td>
                    <td>LastName</td>  
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Reg-Date</td>
                    <td>Action</td>         
                </thead>
                <tbody>
                    <tr>
                        <td>Anita Maxx Wynn</td>
                        <td>David Matthew</td>
                        <td>Borromeo</td>
                        <td>balagbagdavid@outcook.com</td>
                        <td>09999999999</td>
                        <td>02/11/24</td>
                        <td class="ved">
                            <i class="bx bxs-show"></i>
                            <i class="bx bxs-edit"></i>
                            <i class="bx bxs-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Anita Maxx Wynn</td>
                        <td>David Matthew</td>
                        <td>Borromeo</td>
                        <td>balagbagdavid@outcook.com</td>
                        <td>09999999999</td>
                        <td>02/11/24</td>
                        <td class="ved">
                            <i class="bx bxs-show"></i>
                            <i class="bx bxs-edit"></i>
                            <i class="bx bxs-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Anita Maxx Wynn</td>
                        <td>David Matthew</td>
                        <td>Borromeo</td>
                        <td>balagbagdavid@outcook.com</td>
                        <td>09999999999</td>
                        <td>02/11/24</td>
                        <td class="ved">
                            <i class="bx bxs-show"></i>
                            <i class="bx bxs-edit"></i>
                            <i class="bx bxs-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Anita Maxx Wynn</td>
                        <td>David Matthew</td>
                        <td>Borromeo</td>
                        <td>balagbagdavid@outcook.com</td>
                        <td>09999999999</td>
                        <td>02/11/24</td>
                        <td class="ved">
                            <i class="bx bxs-show"></i>
                            <i class="bx bxs-edit"></i>
                            <i class="bx bxs-trash"></i>
                        </td>
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