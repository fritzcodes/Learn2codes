<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Module | Admin</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">
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


        <div class="user" style="margin-top: 1rem;">
            @if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->profile_photo)
            <img src="{{Auth::guard('admin')->user()->profile_photo ? asset('images/' . Auth::guard('admin')->user()->profile_photoo) : 'assets/images/avatar.png' }}" alt="user" class="user-img">
            @else
            <!-- Placeholder image or default avatar -->
            <img src="../assets/images/avatar.png" alt="user" class="user-img">
            @endif
            {{-- <img src="../assets/images/avatar.png" alt="user" class="user-img"> --}}
            <div class="deet" style="line-height: 0.1;">
                <p class="username" style="margin-top: 15px;">{{ Auth::guard('admin')->user()->email }}</p>
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
                <a target="_top" href="{{ route('addModule') }}"  class='active'>
                <a target="_top" href="{{ route('addModule') }}" class='active'>
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

    <div class="main-content"> <!------------------------------------------ dashboard -->
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

    <form method="post" action="/admin/addNewModule" class="summernote" style="padding-top: 10px;">
        @csrf
        <label for="title" class="label">Title</label>
        <input type="text" name="title" class="input" id="" placeholder="Input Title" required>
        <br>
        <label for="title" class="label">Language</label>
        <select name="language" class="select" id="" required>
            <option value="">--Select a Language--</option>
            @foreach ($data as $item)
            <option value="{{ $item->language }}">{{ $item->language }}</option>
            @endforeach
        </select>
        <div style="width: 100%;">
            <textarea id="summernote" name="content"></textarea>
        </div>
        <br>
        <label for="trycode" class="label">Example Code</label>
        <textarea name="trycode" id="trycode" cols="100" rows="10" style="width: 100%;"></textarea><br>
        <label for="filename" class="label">File Name</label>
        <input type="text" name="filename" class="input" id="filename" placeholder="example.java"><br>
        <button class="button" type="submit" style="margin-top: 20px;">Add module</button>
        <br>
    </form>

    <div class="table">
        <div class="tablebg">
            <div class="heading">
                <h2>Module</h2>
                <input class="search" placeholder="Search" id="search">
                <a href="#" class="action" style="display:none;">View All</a>
            </div>
            <table class="quiz">
                    <tr>
                        <th>Language</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->language }}</td>
                            <td class="ved">
                                <a href="/admin/languageModule/{{ urlencode($item->language) }}"><i class="bx bxs-show"></i></a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').addEventListener('submit', function(e) {
                // Make Summernote textarea visible
                $('#summernote').summernote('enable');

                // Validate Summernote content
                var summernoteContent = $('#summernote').summernote('code').trim();
                if (summernoteContent === '') {
                    e.preventDefault(); // Prevent form submission
                    alert('Content is required.'); // Display error message
                }

                
                if($('#trycode').val() != "" && $('#filename').val() == ""){
                    alert("File name is required");
                    e.preventDefault();
                }
                // Hide Summernote textarea again
                $('#summernote').summernote('disable');
            });

            
        });
        // Initialize Summernote with customized toolbar
        // Initialize Summernote with customized toolbar
        $('#summernote').summernote({
            placeholder: 'Add Module Here...',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']], // Add font size dropdown to the toolbar
                ['fontname', ['fontname']], // Add font family dropdown to the toolbar
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'table']], // Add 'table' option to the 'insert' group
                ['view', ['fullscreen', 'codeview']]
            ],
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma',
                'Times New Roman', 'Verdana'
            ]
        });
    </script>
   <script src="../assets/js/admin/admin.js" async></script>
</body>

</html>