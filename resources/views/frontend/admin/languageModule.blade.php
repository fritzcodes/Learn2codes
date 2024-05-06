<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Module List | Admin </title>
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">
    <link rel="stylesheet" href="/assets/css/Admin.css">
    <link rel="stylesheet" href="/assets/css/userModal.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet'>    
    <script src="/assets/js/admin/admin.js" defer></script>

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

        .draggable-table {
            font-family: var(--font2); 
            position: absolute;
            width: 100%;
            border-collapse: collapse;
            -webkit-box-shadow: 0px 0px 10px 8px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 10px 8px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
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
            top: 50px;
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
            <a onclick="openAdminModal()">
                @if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->profile_photo)
                    <img src="{{ asset('images/' . Auth::guard('admin')->user()->profile_photo) }}" alt="user"
                        class="user-img">
                @else
                    <!-- Placeholder image or default avatar -->
                    <img src="/assets/images/avatar.png" alt="user" class="user-img">
                @endif
            </a>
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
                <a target="_top" href="/admin/forum">
                    <i class="bx bxs-chat"></i>
                    <span class="nav-item">Forum</span>
                </a>
            </li>
            <li>
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
            <li>
                <a target="_top" href="/admin/history">
                <i class='bx bx-history'></i>
                    <span class="nav-item">History</span>
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
        <div class="back">
            <a href="/admin/addModule" class="bx bx-chevron-left" id="back-btn"></a>
        </div>
    <!--$%adsense%$-->
        <!-- Start DEMO HTML (Use the following code into your project)-->
        {{-- <p>Drag n' Drop sorting of rows!</p> --}}
        <table id="table" class="draggable-table">
            <thead>
                <th>Title</th>
                <th>Action</th>
            </thead>
            <tbody id="1">
                @foreach ($data as $item)
                    <tr id="{{ $item->id }}">
                        <td>{{ $item->title }}</td>
                        <td class="ved">
                                <a href="/admin/viewModule/{{$item->id}}"><i class="bx bxs-show"></i></a>
                                <button class="bx bxs-trash delete-module" data-id="{{ $item->id }}" data-title="{{ $item->title }}"></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- END EDMO HTML (Happy Coding!)-->

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



    <!-- Script JS -->
      <script>
        (function() {
            "use strict";

            const table = document.getElementById('table');
            const tbody = table.querySelector('tbody');

            var currRow = null,
                dragElem = null,
                mouseDownX = 0,
                mouseDownY = 0,
                mouseX = 0,
                mouseY = 0,
                mouseDrag = false;

            function init() {
                bindMouse();
            }

            function bindMouse() {
                document.addEventListener('mousedown', (event) => {
                    if (event.button != 0) return true;

                    let target = getTargetRow(event.target);
                    if (target) {
                        currRow = target;
                        addDraggableRow(target);
                        currRow.classList.add('is-dragging');


                        let coords = getMouseCoords(event);
                        mouseDownX = coords.x;
                        mouseDownY = coords.y;

                        mouseDrag = true;
                    }
                });

                document.addEventListener('mousemove', (event) => {
                    if (!mouseDrag) return;

                    let coords = getMouseCoords(event);
                    mouseX = coords.x - mouseDownX;
                    mouseY = coords.y - mouseDownY;

                    moveRow(mouseX, mouseY);
                });

                document.addEventListener('mouseup', (event) => {
                    if (!mouseDrag) return;

                    currRow.classList.remove('is-dragging');
                    table.removeChild(dragElem);

                    dragElem = null;
                    mouseDrag = false;
                });
            }


            function swapRow(row, index) {
                let currIndex = Array.from(tbody.children).indexOf(currRow),
                    row1 = currIndex > index ? currRow : row,
                    row2 = currIndex > index ? row : currRow;

                tbody.insertBefore(row1, row2);
            }

            function moveRow(x, y) {
                dragElem.style.transform = "translate3d(" + x + "px, " + y + "px, 0)";

                let dPos = dragElem.getBoundingClientRect(),
                    currStartY = dPos.y,
                    currEndY = currStartY + dPos.height,
                    rows = getRows();

                for (var i = 0; i < rows.length; i++) {
                    let rowElem = rows[i],
                        rowSize = rowElem.getBoundingClientRect(),
                        rowStartY = rowSize.y,
                        rowEndY = rowStartY + rowSize.height;

                    if (currRow !== rowElem && isIntersecting(currStartY, currEndY, rowStartY, rowEndY)) {
                        if (Math.abs(currStartY - rowStartY) < rowSize.height / 2)
                            swapRow(rowElem, i);
                    }
                }
            }

            function addDraggableRow(target) {
                dragElem = target.cloneNode(true);
                dragElem.classList.add('draggable-table__drag');
                dragElem.style.height = getStyle(target, 'height');
                dragElem.style.background = getStyle(target, 'backgroundColor');
                for (var i = 0; i < target.children.length; i++) {
                    let oldTD = target.children[i],
                        newTD = dragElem.children[i];
                    newTD.style.width = getStyle(oldTD, 'width');
                    newTD.style.height = getStyle(oldTD, 'height');
                    newTD.style.padding = getStyle(oldTD, 'padding');
                    newTD.style.margin = getStyle(oldTD, 'margin');
                }

                table.appendChild(dragElem);


                let tPos = target.getBoundingClientRect(),
                    dPos = dragElem.getBoundingClientRect();
                dragElem.style.bottom = ((dPos.y - tPos.y) - tPos.height) + "px";
                dragElem.style.left = "-1px";

                document.dispatchEvent(new MouseEvent('mousemove', {
                    view: window,
                    cancelable: true,
                    bubbles: true
                }));
            }







            function getRows() {
                return table.querySelectorAll('tbody tr');
            }

            function getTargetRow(target) {
                let elemName = target.tagName.toLowerCase();

                if (elemName == 'tr') return target;
                if (elemName == 'td') return target.closest('tr');
            }

            function getMouseCoords(event) {
                return {
                    x: event.clientX,
                    y: event.clientY
                };
            }

            function getStyle(target, styleName) {
                let compStyle = getComputedStyle(target),
                    style = compStyle[styleName];

                return style ? style : null;
            }

            function isIntersecting(min0, max0, min1, max1) {
                return Math.max(min0, max0) >= Math.min(min1, max1) &&
                    Math.min(min0, max0) <= Math.max(min1, max1);
            }



            init();

        })();
    </script>
    <script>
        $(document).ready(function() {
            $("#table tbody").sortable({

                update: function(event, ui) {
                    var order = $(this).sortable('toArray');

                    console.log(order);
                    $.ajax({
                        url: '/admin/changeOrder',
                        data: {
                            order
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'POST',
                        dataType: 'json',
                        beforeSend: function() {
                            Swal.fire({
                                title: 'Pls wait...',
                                didOpen: () => {
                                    Swal.showLoading();
                                },
                            })
                        },
                        success: function(data) {
                            if (data == true) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: 'Module Order Changed',
                                })
                            }
                        },
                        error: function(xhr) {
                            alert(xhr.responseText);
                        }
                    })
                }
            });
        });
    </script>

<script>
    // Assuming you're using jQuery
    $(document).ready(function() {
    $('.delete-module').on('click', function() {
        var id = $(this).data('id');
        var title = $(this).data('title');

        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to delete the module: ' + title,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // User confirmed, send the delete request
                $.ajax({
                    url: '/admin/module/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response); // Log the response
                        // Display success message
                        Swal.fire(
                            'Deleted!',
                            'The module has been deleted.',
                            'success'
                        ).then((result) => {
                            // Reload the page after the user clicks "OK"
                            if (result.isConfirmed || result.dismiss === Swal.DismissReason.timer) {
                                location.reload();
                            }
                        });
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText); // Log the error response
                        // Display error message
                        Swal.fire(
                            'Deleted!',
                            'The module has been deleted.',
                            'success'
                        ).then((result) => {
                            // Reload the page after the user clicks "OK"
                            if (result.isConfirmed || result.dismiss === Swal.DismissReason.timer) {
                                location.reload();
                            }
                        });
                    }
                });
            }
        });
    });
});


</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
