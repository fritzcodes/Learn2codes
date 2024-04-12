<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="assets/css/Edit.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            padding: 90px 10%;
            width: 100%;
            height: 100vh;
            background: url('assets/images/proressbg.svg') no-repeat center center fixed;
            background-size: cover;
            color: var(--text-color);
            overflow-x: hidden;
            /* Prevent horizontal scrolling */
            z-index: -1;
            /* Behind other content */
            background-size: cover;
        }

        .profile-icon {
            position: absolute;
            width: 120px;
            height: 120px;
            display: flex;
            margin-left: 34%;
            margin-top: -25px;
            border-radius: 60%;
            background-color: lightgray;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 2px solid black;
            background: url("../assets/images/avatar.png");
            background-size: 102%;
            background-repeat: no-repeat;

        }

        .cancel-button {
            position: absolute;
            display: block;
            /* Change from none to block */
            margin-top: -30px;
            margin-bottom: 105px;
            cursor: pointer;
            margin-left: 480px;
            margin-right: 600px;
            padding: 12px;
            text-align: center;
            border-radius: 20px;
            background: url('../assets/images/close.png');
            background-size: cover;

        }
    </style>

</head>

<body>

    <header>
        <a href="{{ route('profile') }}" class="bx bx-chevron-left" id="back-btn"></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">

            <ul class="profile">
                <button><a href="{{ route('profile') }}" class="profile-link">

                        @if (Auth::check() && Auth::user()->profile_photo)
                            <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : 'assets/images/avatar.png' }}"
                                alt="Profile Photo" class="avatar">
                        @else
                            <!-- Placeholder image or default avatar -->
                            <img src="assets/images/avatar.png" alt="Default Avatar" class="avatar">
                        @endif
                        <h2>{{ Auth::user()->username }}</h2>
                    </a></button>
            </ul>

            <li><a href="/startmenu">Home</a></li>
            <li><a href="/forum">Forums</a></li>
            <li><a href="/Playground">Playground</a></li>
            <li><a href="/module/moduleLanguage">Modules</a></li>
            <li><a href="/leaderboard">Leaderboard</a></li>
            <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

        </ul>

    </header>


    <section class="space-background">

        <body>

            <div class="heading">Edit Profile</div>

            <div class="headline"> ______</div>
            <div class="profile-icon" onclick="openFileInput()">
                <img style="width:100%; height:100%; border-radius:50%"
                    src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : '../assets/images/avatar.png' }}"
                    alt="">
            </div>

            <form method="post" enctype="multipart/form-data" id="formData">
                @csrf
                <input type="file" id="fileInput" style="display: none;" onchange="handleFileSelect(event)"
                    accept="image/*" name="profile_photo">
                <input type="file" class="profile-image" accept="image/*" onchange="previewImage()">
                <div class="cancel-button" onclick="cancelUpload()"></div>



                <label class="label1" for="firstname">First Name:</label>
                <input class="firstname" type="text" id="fname" placeholder="First Name?"
                    value="{{ Auth::user()->fname }}" name="fname" required>

                <label class="label2" for="lastname">Last Name:</label>
                <input class="lastname" type="text" id="lname" placeholder="Last Name?"
                    value="{{ Auth::user()->lname }}" name="lname" required>
                <br>
                <label class="label3" for="course">Course:</label>
                <input class="course" type="text" id="course" placeholder="Course?"
                    value="{{ Auth::user()->course }}" name="course" required>


                <label class="label4"for="Years">Year Level:</label>
                <select class="Years" id="year" name="year">
                    <option class="option1" value="{{ Auth::user()->year }}">---Select Year---</option>
                    <option class="option1" value="1st Year" {{ Auth::user()->year == '1st Year' ? 'selected' : '' }}>
                        1st Year</option>
                    <option class="option1"value="2nd Year" {{ Auth::user()->year == '2nd Year' ? 'selected' : '' }}>
                        2nd Year</option>
                    <option class="option1"value="3rd Year" {{ Auth::user()->year == '3rd Year' ? 'selected' : '' }}>
                        3rd Year</option>
                    <option class="option1"{{ Auth::user()->year == '4th Year' ? 'selected' : '' }}>4th Year</option>
                </select>

                <label class="label5" for="username">Username:</label>
                <input class="username" type="text" id="username" placeholder="Your Username?"
                    value="{{ Auth::user()->username }}" name="username" required>

                <label class="label6" for="Email">Email:</label>
                <input class="Email" type="email" id="Email" placeholder="Your Email?"
                      value="{{ Auth::user()->email }}" name="email">

                <input type="hidden" name="id" value="{{ Auth::user()->id }}" required>


                <button type="button" class="submit-button" id="btnSubmit">Save</button>
                {{-- <button class="reset-button" onclick="resetForm()">Reset</button> --}}

                <!-- Verification Message -->
                <div class="verification-message" id="verification-message" style="display: none;"> Save
                    successfully!</div>
                </div>
            </form>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // var bottomReached = false;

        // window.onscroll = function() {

        //     var scrollHeight = document.documentElement.scrollHeight;
        //     var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        //     var clientHeight = document.documentElement.clientHeight;


        //     if (!bottomReached && scrollTop + clientHeight >= scrollHeight - 10) {

        //         bottomReached = true;
        //         $('#pb').css('width', '70%')
        //         $('#pb').html('70%')
        //     }
        // };




        $('#btnSubmit').click(function() {
            const form = document.getElementById('formData');
            const formData = new FormData(form);
            $.ajax({
                url: '/update',
                method: 'post',
                data: formData,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                beforeSend: function() {
                    Swal.fire({
                        title: 'Pls Wait...',
                        didOpen: () => {

                            Swal.showLoading()
                        }
                    })
                },
                success: function(data) {
                    if (data == "success") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Updated Sucessfully',

                        }).then(res => {
                            window.location.reload();
                        })
                    } else {
                        console.log(data);
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    const errors = JSON.parse(xhr.responseText);


                    const errorMessages = Object.values(errors.errors).flat();

                    errorMessages.map(item => {
                        toastr.options = {
                            closeButton: true,
                            progressBar: true,
                            showMethod: 'slideDown', // Define the show animation
                            hideMethod: 'slideUp', // Define the hide animation
                            timeOut: 5000
                        };
                        toastr.error(item, 'Error')
                    });
                }

            });

        })

        function openFileInput() {
            document.getElementById('fileInput').click();
        }

        function handleFileSelect(event) {
            const file = event.target.files[0];
            // Do something with the selected file, such as displaying preview or uploading it.
            // Example:
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgElement = document.querySelector('.profile-icon img');
                    imgElement.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>

    <script type="text/javascript" src="assets/js/headermenu.js"></script>

</body>

</html>
