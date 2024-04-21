<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Language | Admin</title>
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">
    <link rel="stylesheet" href="../assets/css/Admin.css">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/assets/js/admin/admin.js" async></script>
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
                <a target="_top" href="/admin/language" class='active'>
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


    <div class="main-content">
                <!------------------------------------------ dashboard -->  
        <form action="/admin/AddLanguage" method="post" enctype="multipart/form-data" class="summernote" style="padding-top: 10px;">
           @csrf            
        <div class="form">
               <div class="langpicDiv">
                   <label for="ops" id="option">Add Language</label>
                   <br>
                   <input class="input" type="text" name="language" id="language" placeholder="Language" required>
                   <div class="photocontainer">
                                    <input type="file" name="picture" id="picture"
                                            accept="image/*, .svg" required>
                                    <label for="picture">
                                        <i class='bx bx-upload'></i> &nbsp; Choose A Photo
                                    </label>
                                    <p id="num-of-files">
                                        No Files Chosen
                                    </p>
                                    <div id="photos">

                                    </div>
                    </div>

                   <br>
                   <button class="button" type="submit">Add</button>               
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

    <script>
        //      ADD IMAGE SECTION

document.getElementById('picture').addEventListener('change', function () {
  var preview = document.getElementById('photos');
  preview.innerHTML = ''; // Clear the preview
  var files = event.target.files; // Get the selected files

  for (var i = 0; i < files.length; i++) {
    var file = files[i];

    if (file.type.startsWith('image/')) { // Ensure it's an image
      var reader = new FileReader();

      reader.onload = function (e) {
        var img = document.createElement('img');
        img.src = e.target.result;
        img.style.maxWidth = '200px'; // Set the maximum width of the preview image
        img.style.maxHeight = '200px'; // Set the maximum height of the preview image
        preview.appendChild(img);
      };

      reader.readAsDataURL(file); // Read the image file as a data URL
    }
  }
});
    </script>
</body>

</html>
