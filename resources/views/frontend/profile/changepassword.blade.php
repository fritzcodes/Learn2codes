<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="assets/css/forget.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">


    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
   
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
            body {
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        height: 100vh; /* Use full viewport height */
        margin: 0; /* Remove default body margin */
        background-size: cover;
        animation: animateBackground 20s linear infinite; /* Adjust as needed */
          }
          @keyframes animateBackground {
            0% {
              background-position: 0 0;
            }
            100% {
              background-position: 100% 100%;
            }
          }

    .title p {
        font-weight: 600;
    }

    .mobile-logo {
        display: flex;
        justify-content: center;
  }


    input, .btns {
        font-family: var(--font2);
    }
  
    
    </style>

</head>

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


<body style="background-image: url(assets/images/Backlogin.png);">
<section class="space-background">
            @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    <p style="">{{ Session::get('error') }}</p>
                </div>
            @endif
            @if (session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            title: 'Success!',
                            text: '{{ session('success') }}',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    });
                </script>
            @endif

            <form method='POST' id="changePassword">
            @csrf

                <div class="mobile-logo">
                    <img src="assets/images/Logo.jpg" alt="Logo">
                </div>

                <div class="title">
                <p>Change current password</p>
                </div>

                <div class="typeinput">
                  <input required placeholder="Current Password" type="password" id="currentPassword" name="password">
                  <button class="showhide" type="button" onclick="togglePassword('currentPassword')">
                    <img id="imageeye" src="assets/images/view.png" alt="not visible eye">
                  </button>
                </div>
                <div class="typeinput">
                  <input required placeholder="Set New Password" type="password" id="newPassword" name="password" oninput="checkPasswords()">
                  <button class="showhide" type="button" onclick="togglePassword('newPassword')">
                    <img id="imageeye" src="assets/images/view.png" alt="not visible eye">
                  </button>
                </div>
                <div class="typeinput">
                  <input required placeholder="Confirm Password" type="password" id="confirmPassword" name="password" oninput="checkPasswords()">
                  <button class="showhide" type="button" onclick="togglePassword('confirmPassword')">
                    <img id="imageeye" src="assets/images/view.png" alt="not visible eye">
                  </button>
                </div>
                <div class="typeinput" id="passwordMatch" style="display:none;">
                        <p >Passwords match!</p> <!-- Removed the margin-bottom -->
                </div>
                <div class="typeinput" id="passwordError">
                        <p>Passwords do not match!</p> <!-- Removed the margin-bottom -->
                </div>
                <div class="logbutton">
                  <button type="submit" id="changePassBtn" class="btns">Confirm</button>
                </div>
            </form>
      </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $('#changePassBtn').click(function() {
            const currentPassword = $('#currentPassword').val();
            const newPassword = $('#newPassword').val();
            const confirmPassword = $('#confirmPassword').val();
            var bool = false;

            $.ajax({
                url: '/change-password',
                method: 'POST',
                data: {
                    current_password: currentPassword,
                    password: newPassword,
                    confirm_password: confirmPassword,
                    _token: '{{ csrf_token() }}',
                },

                dataType: 'json',
                beforeSend: function() {
                    Swal.fire({
                        title: 'Please Wait...',
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
                            text: 'Updated Successfully',

                        }).then(res => {
                            window.location.reload();
                        })
                    } else {
                        toastr.options = {
                            closeButton: true,
                            progressBar: true,
                            showMethod: 'slideDown',
                            hideMethod: 'slideUp',
                            timeOut: 5000
                        };
                        toastr.error('', 'Your current password did not match!')
                        Swal.close();
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
                            showMethod: 'slideDown',
                            hideMethod: 'slideUp',
                            timeOut: 5000
                        };
                        toastr.error(item, 'Error')
                    });

                }
            });
        });

            function togglePassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            var imageeye = passwordInput.parentNode.querySelector('img');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                imageeye.src = 'assets/images/hidden.png';
            } else {
                passwordInput.type = 'password';
                imageeye.src = 'assets/images/view.png';
            }
        }

    function checkPasswords() {
    var newPassword = document.getElementById('newPassword');
    var confirmPassword = document.getElementById('confirmPassword');
    var errorElement = document.getElementById('passwordError');
    var matchElement = document.getElementById('passwordMatch');

    // Reset the visibility of messages
    errorElement.style.display = 'none';
    matchElement.style.display = 'none';

    // Check if both fields are empty
    if (newPassword.value === '' || confirmPassword.value === '') {
        return false; // Prevent form submission if fields are empty
    }

    // Compare passwords
    if (newPassword.value === confirmPassword.value) {
        matchElement.style.display = 'flex'; // Show the match message
        return true; // Allow form submission
    } else {
        errorElement.style.display = 'flex'; // Show the error message
        return false; // Prevent form submission
    }
}
    </script>
    
    <script src="assets/js/headermenu.js"></script>
    <script src="assets/js/ChangePassword.js"></script>

</body>

</html>
