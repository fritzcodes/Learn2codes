<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>
    <link rel="stylesheet" href="../assets/css/Admin.css">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <a onclick="openAdminModal()">
                @if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->profile_photo)
                    <img src="{{ asset('images/' . Auth::guard('admin')->user()->profile_photo) }}" alt="user"
                        class="user-img">
                @else
                    <!-- Placeholder image or default avatar -->
                    <img src="../assets/images/avatar.png" alt="user" class="user-img">
                @endif
            </a>
            <div>
                <p class="username">{{ Auth::guard('admin')->user()->username }}</p>
                <p>Admin</p>
            </div>
        </div>
        <ul>
            <li>
                <a target="_top" href="/admin/dashboard.html">
                    <i class="bx bxs-dashboard"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
            </li>
            <li>
                <a target="_top" href="/admin/manageUser.html">
                    <i class="bx bxs-user"></i>
                    <span class="nav-item">Manage Users</span>
                </a>
            </li>
            <li>
                <a target="_top" href="/admin/leaderboard.html">
                    <i class="bx bxs-trophy"></i>
                    <span class="nav-item">Leaderboard</span>
                </a>
            </li>            
            <li class="addlang">
                <a target="_top" href="/admin/addLanguage.html" class='active'>
                    <i class="bx bxs-select-multiple"></i>
                    <span class="nav-item">Add Language</span>
                </a>
            </li>
            <li>
                <a target="_top" href="/admin/quiz.html">
                    <i class="bx bxs-hourglass-top"></i>
                    <span class="nav-item">Quiz</span>
                </a>
            </li>

            <li>
                <a target="_top" href="/admin/forum">
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


    <div class="main-content" id="content1">        <!------------------------------------------ dashboard -->  
        <form action="/admin/AddQuizLanguage" method="post" enctype="multipart/form-data">
            @csrf
           <div class="form">
               <div class="langpicDiv">
                   <label for="ops" id="option">Add Quiz Language</label>
                   <br>
                   <input type="text" name="language" id="language" placeholder="Language">
                   <input type="file" name="picture" id="picture" accept="image/*, .svg">
                   <br>
                   <button onclick="" id="add_question" type="submit" value="Add">Add</button>               
               </div>
           </div>

       </form>    


    {{-- <form action="/admin/AddLanguage" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="language" id="language">
        <input type="file" name="picture" id="picture" accept="image/*, .svg">
        <input type="submit" value="Add">
    </form> --}}

    <div class="table">
        <div class="tablebg">
            <div class="heading">
                <h2>Languages</h2>
                <input class="search" placeholder="Search" id="search">
                <a href="#" class="action">View All</a>
            </div>
            <table class="languagetb">
                <thead>
                    <td class="medium-column">Photo</td>
                    <td class="small-column">Language</td>  
                    <td class="small-column">Action</td>      
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td><img src="/images/{{ $item->picture }}" height="100px" width="100px" alt=""></td>
                            <td>{{ $item->language }}</td>
                            <td class="ved">
                                <i onclick="update({{ $item->id }})" class="bx bxs-edit"></i>
                                <i onclick="del({{ $item->id }}" class="bx bxs-trash"></i>
                            </td>
                        </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>


    {{-- <table>
        <tr>
            <th>Photo</th>
            <th>Language</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td><img src="/images/{{ $item->picture }}" height="100px" width="100px" alt=""></td>
                <td>{{ $item->language }}</td>
                <td><button onclick="update({{ $item->id }})">Update</button> <button
                        onclick="del({{ $item->id }})">Delete</button></td>
            </tr>
        @endforeach
    </table> --}}
    @if (Session::has('message'))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown', // Define the show animation
                hideMethod: 'slideUp', // Define the hide animation
                timeOut: 5000
            };
            toastr.success("New Language Added!", 'Success')
        </script>
    @endif
    <script>
        function update(id){
            $.ajax({
                url: ''
            })
        }
        function del(id){
            
        }
    </script>
</body>

</html>
