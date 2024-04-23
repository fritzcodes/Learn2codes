<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User | Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/userModal.css">
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
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
                <a target="_top" href="{{ route('ManageUser') }}" class='active'>
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
    <div class="main-content"> <!---------------------- manage users -->
        <div class="table">
            <div class="tablebg">
                <div class="heading">
                    <h2>All Users</h2>
                    <input class="search" placeholder="Search" id="search" onkeyup="search()">
                </div>
                <table class="manage-user">
                    <thead>
                        <tr>
                            <td>User ID</td>
                            <td>FirstName</td>
                            <td>LastName</td>
                            <td>Username</td>
                            <td>Year</td>
                            <td>Course</td>
                            <td>Action</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        @foreach($user as $use )
                        <tr id="user-{{ $use->id }}">
                            <td>{{$use['id']}}</td>
                            <td>{{$use['fname']}}</td>
                            <td>{{$use['lname']}}</td>
                            <td>{{$use['username']}}</td>
                            <td>{{$use['year']}}</td>
                            <td>{{$use['course']}}</td>
                            <td class="ved">
                                <button id="openUser" class="bx bxs-show"></button>
                                <button class="bx bxs-trash" onclick="confirmDelete({{ $use->id }})"></button>
                            </td>
                            @php
                            $new_last_online_at = date('Y-m-d H:i:s', strtotime($use['last_online_at'] . ' +2 minutes'));
                            @endphp
                            <td>{{$new_last_online_at > now() ? 'Online' :  \Illuminate\Support\Carbon::parse($use['last_online_at'])->diffForHumans()  }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div id="userModal" class="modal">

        <!-- Modal content -->
        <form class="user-content">

            <div class="head">
                <h2>User Details</h2>
                <a class="close">&times;</a>                
            </div>
        
            <div class="image-container">
                <a href=""><img src="../assets/images/avatar.png" alt=""></a>        
            </div>
        
            @foreach($user as $use)
                <div class="typeinput"> 
                    <label for="email">Email:</label>          
                    <h2>{{ $use['email'] }}</h2>
                </div>
        
                <div class="typeinput"> 
                    <label for="username">Username:</label>          
                    <h2>{{ $use['username'] }}</h2>
                </div>
        
                <div class="typeinput">   
                    <label for="firstname">Firstname:</label>   
                    <h2>{{ $use['fname'] }}</h2>
                </div>
        
                <div class="typeinput"> 
                    <label for="lastname">Lastname:</label>     
                    <h2>{{ $use['lname'] }}</h2>
                </div>
        
                <div class="typeinput"> 
                    <label for="exp">EXP:</label>          
                    <h2>{{ $use['total_points'] }}</h2>
                </div>
        
                <div class="typeinput"> 
                    <label for="badge">Badge:</label>          
                    <h2>{{ $use['badge_count'] }}</h2>
                </div>
            @endforeach
        
        </form>
        

        </div>


    </div>


    <script src="../assets/js/admin/admin.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var modal = document.getElementById("userModal");
            var btn = document.getElementById("openUser");
            var span = document.getElementsByClassName("close")[0];

            btn.onclick = function() {
                modal.style.display = "block";
            };

            span.onclick = function() {
                modal.style.display = "none";
            };

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
        });
    </script>

    <script>
        function search() {
            var text = document.getElementById('search').value.toLowerCase();
            var rows = document.querySelectorAll('.manage-user tbody tr');

            rows.forEach(function(row) {
                var match = false;
                row.querySelectorAll('td').forEach(function(cell) {
                    if (cell.textContent.toLowerCase().includes(text)) {
                        match = true;
                    }
                });
                if (match) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>

    <script>
        // Retrieve CSRF token from meta tag
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        function isoStringDate(lastOnline) {
            var date = new Date(lastOnline);

            // Get the individual components
            var year = date.getFullYear();
            var month = ('0' + (date.getMonth() + 1)).slice(-2); // Month is zero-based, so add 1
            var day = ('0' + date.getDate()).slice(-2);
            var hours = ('0' + date.getHours()).slice(-2);
            var minutes = ('0' + date.getMinutes()).slice(-2);
            var seconds = ('0' + date.getSeconds()).slice(-2);
            var milliseconds = ('00' + date.getMilliseconds()).slice(-3);

            // Format the date string
            return `${year}-${month}-${day}T${hours}:${minutes}:${seconds}.${milliseconds}Z`;
        }

        function fetchDataAndUpdateTable() {
            fetch('/admin/manageUserRefresh') // Replace '/your-api-endpoint' with the actual endpoint to fetch the data
                .then(response => response.json())
                .then(data => {
                    // Clear the existing table body
                    document.getElementById('userTableBody').innerHTML = '';

                    // Append new data to the table body
                    data.forEach(user => {

                        var lastOnlineAt = new Date(user.last_online_at);
                        var lastOnlineAt2 = new Date(user.last_online_at);
                        lastOnlineAt.setMinutes(lastOnlineAt.getMinutes() + 2);
                        // Assuming dateString is "Mon Apr 22 2024 14:40:29 GMT+0800 (Singapore Standard Time)"
                        

                        // Parse the date string


                        //console.log("timeeee",formattedDateString); // Output: "2024-04-22T14:40:29.000Z"

                        var currentDate = new Date();
                        var currentTime = currentDate.toISOString(); // Convert to UTC string
                        // Send currentDateUTC to the server
                        
                        let row = `<tr id="user-${user.id}">
                                    <td>${user.id}</td>
                                    <td>${user.fname || ''}</td>
                                    <td>${user.lname || ''}</td>
                                    <td>${user.username || ''}</td>
                                    <td>${user.year || ''}</td>
                                    <td>${user.course || ''}</td>
                                    <td class="ved">
                                        <button class="bx bxs-show"></button>
                                        <button class="bx bxs-trash" onclick="confirmDelete(${user.id})"></button>
                                    </td>
                                    <td>${isoStringDate(lastOnlineAt) > currentTime  ? 'Online' : moment.utc(isoStringDate(lastOnlineAt2)).fromNow()}</td>
                                </tr>`;
                        document.getElementById('userTableBody').innerHTML += row;
                        
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Refresh the data every 10 seconds
        setInterval(fetchDataAndUpdateTable, 10000);

        function confirmDelete(userId) {
            if (confirm("Are you sure you want to delete this account?")) {
                // If the user confirms, send a DELETE request using AJAX
                $.ajax({
                    url: "/admin/users/delete/" + userId,
                    type: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        // Remove the deleted user row from the table
                        $("#user-" + userId).remove();
                        window.location.href = '/admin/manageUser';
                    },

                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error(error);
                    }
                });
            }
        }
    </script>




</body>

</html>