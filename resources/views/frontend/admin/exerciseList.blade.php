<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/assets/css/Admin.css">
    <title> List of Exercise | Learn2Code </title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400&amp;display=swap'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>

        .cd__intro {
            padding: 60px 30px;
            margin-bottom: 15px;
            flex-direction: column;

        }

        .cd__intro,
        .cd__credit {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            background: #fff;
            color: #333;
            line-height: 1.5;
            text-align: center;
        }

        .cd__intro h1 {
            font-size: 18pt;
            padding-bottom: 15px;

        }

        .cd__intro p {
            font-size: 14px;
        }

        .cd__action {
            text-align: center;
            display: block;
            margin-top: 20px;
        }

        .cd__action a.cd__btn {
            text-decoration: none;
            color: #666;
            border: 2px solid #666;
            padding: 10px 15px;
            display: inline-block;
            margin-left: 5px;
        }

        .cd__action a.cd__btn:hover {
            background: #666;
            color: #fff;
            transition: .3s;
            -webkit-transition: .3s;
        }

        .cd__action .cd__btn:before {
            font-family: FontAwesome;
            font-weight: normal;
            margin-right: 10px;
        }

        .down:before {
            content: "\f019"
        }

        .back:before {
            content: "\f112"
        }

        .cd__credit {
            padding: 12px;
            font-size: 9pt;
            margin-top: 40px;

        }

        .cd__credit span:before {
            font-family: FontAwesome;
            color: #e41b17;
            content: "\f004";


        }

        .cd__credit a {
            color: #333;
            text-decoration: none;
        }

        .cd__credit a:hover {
            color: #1DBF73;
        }

        .cd__credit a:hover:after {
            font-family: FontAwesome;
            content: "\f08e";
            font-size: 9pt;
            position: absolute;
            margin: 3px;
        }

        .cd__main {
            background: #fff;
            padding: 20px;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;

        }

        .cd__main {
            display: flex;
            width: 100%;
        }

        @media only screen and (min-width: 1360px) {
            .cd__main {
                max-width: 1280px;
                margin-left: auto;
                margin-right: auto;
                padding: 24px;
            }
        }

        .cd__main {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100vh;
            background: #cb38e9;
            position: relative;
            background: radial-gradient(circle, #cb38e9 0%, #842fa8 100%) !important;
        }

        .cd__main p {
            font-size: 0.75em;
            font-weight: bold;
            position: absolute;
            top: 15%;
            width: 100%;
            letter-spacing: 5px;
            text-transform: uppercase;
            text-align: center;
            color: white;
            user-select: none;
        }

        .draggable-table {
            position: absolute;
            top: 25%;
            left: 20%;
            width: 60%;
            height: 50%;
            border-collapse: collapse;
            background: white;
            -webkit-box-shadow: 0px 0px 10px 8px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 10px 8px rgba(0, 0, 0, 0.1);
        }

        .draggable-table .draggable-table__drag {
            font-size: 0.95em;
            font-weight: lighter;
            text-transform: capitalize;
            position: absolute;
            width: 100%;
            text-indent: 50px;
            border: 1px solid #f1f1f1;
            z-index: 10;
            cursor: grabbing;
            -webkit-box-shadow: 2px 2px 3px 0px rgba(0, 0, 0, 0.05);
            box-shadow: 2px 2px 3px 0px rgba(0, 0, 0, 0.05);
            opacity: 1;
        }

        .draggable-table thead th {
            height: 25px;
            font-weight: bold;
            text-transform: capitalize;
            padding: 10px;
            user-select: none;
        }

        .draggable-table tbody tr {
            cursor: grabbing;
        }

        .draggable-table tbody tr td {
            font-size: 0.95em;
            font-weight: lighter;
            text-transform: capitalize;
            text-indent: 50px;
            padding: 10px;
            user-select: none;
            border-top: 1px solid whitesmoke;
            color: #000;
        }

        .draggable-table tbody tr:nth-child(even) {
            background-color: #f7f7f7;
        }

        .draggable-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .draggable-table tbody tr.is-dragging {
            background: #f1c40f;
        }

        .draggable-table tbody tr.is-dragging td {
            color: #ffe683;
        }
    </style>
</head>

<body>
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
            <img src="/assets/images/avatar.png" alt="user" class="user-img">
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
                <a target="_top" href="{{ route('addModule') }}">
                <i class='bx bxs-book-reader'></i>
                    <span class="nav-item">Module</span>
                </a>
            </li>
            <li>
                <a target="_top" href="{{ route('addExercise') }}">
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
    <div class="main-content" id="content1"> <!------------------------------------------ dashboard -->
    <main class="">
        <!-- Start DEMO HTML (Use the following code into your project)-->
        {{-- <p>Drag n' Drop sorting of rows!</p> --}}
        <table id="table" class="draggable-table">
            <thead>
                <th>Content</th>
                <th>Action</th>
            </thead>
            <tbody id="1">
                @foreach ($data as $item)
                    <tr id="{{ $item->id }}">
                        <td>{{ $item->content }}</td>
                        <td><a href="/admin/exercise-view/{{$item->id}}"><button>View</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- END EDMO HTML (Happy Coding!)-->
    </main>
    </div>
    <script src="/assets/js/admin/admin.js" async></script>

    
</body>

</html>
