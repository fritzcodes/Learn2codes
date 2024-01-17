
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Account settings
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                        {{-- <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-connections">Connections</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notifications">Notifications</a> --}}
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="tab-content">

                        <div class="tab-pane fade active show" id="account-general">
                            <form method="post" enctype="multipart/form-data" id="formData">
                                @csrf
                                {{-- @method('PUT') --}}
                                <div class="card-body media align-items-center">

                                    <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : 'https://bootdey.com/img/Content/avatar/avatar1.png' }}"
                                        alt="Profile Photo" width="300px" height="300px">



                                    {{-- {{ Auth::user()->profile_photo ? asset('../public/images/' . Auth::user()->profile_photo) : 'https://bootdey.com/img/Content/avatar/avatar1.png' }} --}}
                                    <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary">
                                            Upload new photo
                                            <input type="file" class="account-settings-fileinput" accept="image/*"
                                                name="profile_photo" id="profile_photo">
                                        </label> &nbsp;
                                        <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                        <div class="text-light small mt-1">
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">FirstName</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->fname }}"
                                            name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">LastName</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->lname }}"
                                            name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Course</label>
                                        <input type="text" class="form-control mb-1"
                                            value="{{ Auth::user()->course }}" name="course" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Year</label>
                                        <select id="yearSelect" class="form-control mb-1" name="year" required>
                                            <option value="{{ Auth::user()->year }}">---Select Year---</option>
                                            <option value="1st Year"
                                                {{ Auth::user()->year == '1st Year' ? 'selected' : '' }}>1st Year
                                            </option>
                                            <option value="2nd Year"
                                                {{ Auth::user()->year == '2nd Year' ? 'selected' : '' }}>2nd Year
                                            </option>
                                            <option value="3rd Year"
                                                {{ Auth::user()->year == '3rd Year' ? 'selected' : '' }}>3rd Year
                                            </option>
                                            <option value="4th Year"
                                                {{ Auth::user()->year == '4th Year' ? 'selected' : '' }}>4th Year
                                            </option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control mb-1"
                                            value="{{ Auth::user()->username }}" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="text" class="form-control mb-1"
                                            value="{{ Auth::user()->email }}" name="email">
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}" required>
                                    </div>
                                    {{-- <div class="form-group">
                                    <label class="form-label">Programming Experience Level</label>
                                    <input type="text" class="form-control mb-1" value="No exp">

                                </div>
                                <div class="form-group">
                                    <label class="form-label">Preffered Programming Language</label>
                                    <input type="text" class="form-control mb-1" value="No Preffered Language">

                                    
                                </div> --}}
                                    <div class="text-right mt-3">

                                        <button type="button" id="btnSubmit" class="btn btn-primary">Save
                                            changes</button>&nbsp;
                                        <button type="button" class="btn btn-default">Cancel</button>
                                    </div>
                            </form>
                        </div>

                    </div>
                    {{-- <div class="tab-pane fade" id="account-change-password">
                        <form action="" method="post">


                            <div class="card-body pb-2">
                                @if (Auth::user()->password != null)
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" class="form-control">
                                </div>

                                <div class="text-right mt-3">
                                    <button type="button" id="changePassBtn" class="btn btn-primary">Save
                                        changes</button>&nbsp;
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                        </form>
                    </div> --}}

                    <div class="tab-pane fade" id="account-change-password">
                        <form method="post" id="changePassword">

                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" class="form-control" id="currentPassword"
                                        name="password">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control" id="newPassword" name="new_password"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Confirm new password</label>
                                    <input type="password" class="form-control" id="confirmPassword"
                                        name="confirm_password" required>
                                </div>

                                <div class="text-right mt-3">

                                    <button type="button" id="changePassBtn" class="btn btn-primary">Save
                                        changes</button>&nbsp;
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div><br>
    <div class="w3-border">
        <div class="w3-light-grey">
            <div class="w3-container w3-green w3-center" id="pb" style="width:25%">25%</div>

        </div><br><br>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    <script>
        var bottomReached = false;

        window.onscroll = function() {

            var scrollHeight = document.documentElement.scrollHeight;
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            var clientHeight = document.documentElement.clientHeight;


            if (!bottomReached && scrollTop + clientHeight >= scrollHeight - 10) {

                bottomReached = true;
                $('#pb').css('width', '70%')
                $('#pb').html('70%')
            }
        };



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
    </script>
</body>

</html>


