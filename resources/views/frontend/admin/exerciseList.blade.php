<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/assets/css/Admin.css">
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">
    <title> Exercise List | Admin </title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
      *{
            text-decoration: none;
            box-sizing: border-box;
            list-style: none;
        }          
 
        @media only screen and (min-width: 1360px) {

            .cd__main {
                max-width: 1280px;
                margin-left: auto;
                margin-right: auto;
                padding: 24px;
            }
        }

        .main-content {
            overflow: auto;
        }

        .draggable-table {
            font-family: var(--font2);  
            position: absolute;
            top: 25%;
            left: 20%;
            width: 60%;
            height: 50%;
            border-collapse: collapse;
            -webkit-box-shadow: 0px 0px 10px 8px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 10px 8px rgba(0, 0, 0, 0.1);
        }

        .draggable-table .draggable-table__drag {
            font-size: var(--p-font);
            font-weight: lighter;
            font-weight: 600;
            text-transform: capitalize;
            user-select: none;
            border-top: 1px solid var(--main-color);
            position: absolute;
            border: 1px solid #f1f1f1;
            z-index: 10;
            cursor: grabbing;
            opacity: 60%;
            
        }

        .draggable-table thead th {
            background: var(--second-color);
            color: var(--main-color);
            font-weight: bold;
            text-transform: capitalize;
            padding: 10px 20px;
            text-align: left;
            user-select: none;
        }

        .draggable-table tbody tr {
            cursor: grabbing;
        }

        .draggable-table tbody tr td {
            font-size: var(--p-font);
            font-weight: lighter;
            padding: 20px;
            text-transform: capitalize;
            user-select: none;
            border-top: 1px solid var(--main-color);

        }

        .draggable-table tbody tr:nth-child(even) {
            background-color: var(--main-color);
        }

        .draggable-table tbody tr:nth-child(odd) {
            background-color: var(--main-color);
        }

        .draggable-table tbody tr.is-dragging {
            background: var(--bg-color);
        }

        .draggable-table tbody tr.is-dragging td {
            color: var(--second-color);
        }


        
        @media (max-width: 860px) {
            :root {
        --h2-head: 1.5rem;
        --p-head: 1rem;
        transition: .2s;
      }

      .draggable-table {
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: auto;
            margin: 0;
        }   
 
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
                        <td class="ved">
                                <a href="/admin/exercise-view/{{$item->id}}"><i class="bx bxs-show"></i></a>
                        </td>
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
