<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Exercise | Admin</title>
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">
    <link rel="stylesheet" href="/assets/css/Admin.css">
    <link rel="stylesheet" href="../assets/css/userModal.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="/assets/js/admin/admin.js" async></script>
</head>

<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <span>Learn2Code</span>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>


        <div class="user" style="margin-top: 1rem;">
            <a onclick="openAdminModal()">
                @if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->profile_photo)
                    <img src="{{ asset('images/' . Auth::guard('admin')->user()->profile_photo) }}" alt="user"
                        class="user-img">
                @else
                    <!-- Placeholder image or default avatar -->
                    <img src="/assets/images/avatar.png" alt="user" class="user-img">
                @endif
            </a>
            <div class="deet" style="line-height: 0.1;">
                <p class="username" style="margin-top: 15px;">{{ Auth::guard('admin')->user()->username }}</p>
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
                <a target="_top" href="admin/forum">
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
                <a target="_top" href="/admin/exercise" class='active'>
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
        <div class="back">
            <a href="/admin/exercise" class="bx bx-chevron-left" id="back-btn"></a>
        </div>


            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form method="post" action="/admin/exercise-edit/{{ $data->id }}" class="summernote">
            @csrf
        
            <label for="language" class="label">Language</label>
            <input class="input" type="text" value="{{$data->language}}" name="language" readonly>
            <div style="width: 100%">
                <textarea id="summernote" name="content">{{ $data->content }}</textarea>
            </div>
            <button type="submit" class="button" style="margin-top: 20px;">Update</button>
        </form>
    </div>

 
    <div id="adminModal" class="modal">
        <!-- Modal content -->
        <form method="POST" action="/admin/update-profile" class="admin-content" id="adminUpdateForm">
            @csrf
            <div class="head">
                <h2>Admin</h2>
                <a class="close" onclick="closeAdminModal()">&times;</a>
            </div>
            <div id="infos">
                <div class="image-container" onclick="openFileInput()">
                    <img style="border-radius:50%"
                        src="{{ Auth::guard('admin')->user()->profile_photo ? asset('images/' . Auth::guard('admin')->user()->profile_photo) : '/assets/images/avatar.png' }}"
                        alt="">
                    <input type="file" id="fileInput" style="display: none;"
                        onchange="handleFileSelect(event)" accept="image/*" name="profile_photo">
                    <input type="file" class="profile-image" accept="image/*" onchange="previewImage()">
                </div>
                <div class="typeinput">
                    <label for="username">Username:</label>
                    <input type="text" name="username" value="{{ Auth::guard('admin')->user()->username }}">
                </div>
                <div class="typeinput">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ Auth::guard('admin')->user()->email }}">
                </div>
                <div class="typeinput">
                    <button type="button" onclick="switchToCreateModal()">Create Account</button>
                </div>
                <div class="typeinput">
                    <button type="button" onclick="switchToPassModal()">Change Password</button>
                </div>
                <div class="typeinput">
                    <input type="hidden" name="id" value="{{ Auth::guard('admin')->user()->id }}"
                        required>
                    <button type="button" class="submit-button" id="btnSubmit">Save</button>
                </div>
            </div>
        </form>
    </div>

    <!----------------------------------ADMIN CREATE ACCOUNT MODAL------------------------->
    <div id="createModal" class="modal">

        <!-- Modal content -->
        <form action="/admin/createAccountPost" method="POST" class="create-admin" id="createAccount">
            @csrf
            <div class="head">
                <h2>Admin</h2>
                <a class="close" onclick="closecreateModal()">&times;</a>
            </div>

            <div class="logo">
                <img src="/assets/images/Logo.jpg" alt="learn2Code">
            </div>

            <div class="title">
                <h2>Learn2Code</h2>
                <p>Admin Creation</p>
            </div>

            <div id="infos">

                <div class="typeinput">
                    <input required placeholder="Email" type="text" id="email-phone" name="email">
                </div>
                <div class="typeinput">
                    <input required placeholder="Admin Name" type="text" id="username" name="username">
                </div>
                <div class="typeinput" id="passdiv">
                    <input required placeholder="Password" type="password" id="password" name="password">
                    <button class="showhide" type="button" onclick="togglePassword('password')">
                        <img id="imageeye" src="/assets/images/view.png" alt="not visible eye">
                    </button>
                </div>

                <div class="logbutton">
                    <button id="login" type="submit" class="btns">Create</button>
                </div>
            </div>
        </form>
    </div>

    <!------------------------------------ADMIN CHANGE PASSWORD------------------------->
    <div id="passModal" class="modal">
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
        <!-- Modal content -->
        <form method="POST" action="/admin/change-password" class="create-admin">
            @csrf
            <div class="head">
                <h2>Admin</h2>
                <a class="close" onclick="closepassModal()">&times;</a>
            </div>
        
            <div class="logo">
                <img src="/assets/images/Logo.jpg" alt="learn2Code">
            </div>
        
            <div class="title">
                <p>Change current password</p>
            </div>
        
            <div id="infos">
                <div class="typeinput">
                    <input required placeholder="Current Password" type="password" id="currentPassword" name="current_password">
                    <button class="showhide" type="button" onclick="togglePassword('currentPassword')">
                        <img id="imageeye" src="/assets/images/view.png" alt="not visible eye">
                    </button>
                </div>
                <div class="typeinput">
                    <input required placeholder="Set New Password" type="password" id="newPassword" name="new_password" oninput="checkPasswords()">
                    <button class="showhide" type="button" onclick="togglePassword('newPassword')">
                        <img id="imageeye" src="/assets/images/view.png" alt="not visible eye">
                    </button>
                </div>
                <div class="typeinput">
                    <input required placeholder="Confirm Password" type="password" id="confirmPassword" name="confirm_password" oninput="checkPasswords()">
                    <button class="showhide" type="button" onclick="togglePassword('confirmPassword')">
                        <img id="imageeye" src="/assets/images/view.png" alt="not visible eye">
                    </button>
                </div>
                <div class="typeinput" id="passwordMatch" style="display:none;">
                    <p>Passwords match!</p>
                </div>
                <div class="typeinput" id="passwordError">
                    <p>Passwords do not match!</p>
                </div>
                <div class="logbutton">
                    <button type="button" id="changePassBtn" class="btns">Confirm</button>
                </div>
            </div>
        </form>
        

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    $('#changePassBtn').click(function() {
        const currentPassword = $('#currentPassword').val();
        const newPassword = $('#newPassword').val();
        const confirmPassword = $('#confirmPassword').val();
        var bool = false;

        $.ajax({
            url: '/admin/change-password',
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
                imageeye.src = '/assets/images/hidden.png';
            } else {
                passwordInput.type = 'password';
                imageeye.src = '/assets/images/view.png';
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










    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        @elseif(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            });
        @endif
    </script>

    <script>
        $(document).ready(function() {
            $('#btnSubmit').click(function() {
                var formData = new FormData($('#adminUpdateForm')[0]);
                $.ajax({
                    url: "/admin/update-profile",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Admin profile updated successfully.',
                        }).then(() => {
                            window.location
                        .reload(); // Reload the page after successful update
                        });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An error occurred while updating admin profile.',
                        });
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

    <script>
        // Function to switch from admin modal to create modal
        function switchToPassModal() {
            // Hide the admin modal
            var adminModal = document.getElementById('adminModal');
            adminModal.style.display = "none";

            // Show the create modal
            var passModal = document.getElementById('passModal');
            passModal.style.display = "block";
        }

        function closepassModal() {
            var modal = document.getElementById('passModal');
            modal.style.display = "none";
        }
    </script>



    <script>
        // Function to switch from admin modal to create modal
        function switchToCreateModal() {
            // Hide the admin modal
            var adminModal = document.getElementById('adminModal');
            adminModal.style.display = "none";

            // Show the create modal
            var createModal = document.getElementById('createModal');
            createModal.style.display = "block";
        }

        function closecreateModal() {
            var modal = document.getElementById('createModal');
            modal.style.display = "none";
        }
    </script>

    <script>
        function openAdminModal() {
            var modal = document.getElementById('adminModal');
            modal.style.display = "block";
        }

        function closeAdminModal() {
            var modal = document.getElementById('adminModal');
            modal.style.display = "none";
        }
    </script>
    <!--clickable image container------------------------->
    <script>
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
                    const imgElement = document.querySelector('.image-container img');
                    imgElement.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>


</div>
   

   
<script>
     $('#summernote').summernote({
            placeholder: 'Add codes here...',
            tabsize: 2,
            height: 100,
            toolbar: [
                ['style', ['underline']],
            ],
           
        });
</script>
</body>

</html>
