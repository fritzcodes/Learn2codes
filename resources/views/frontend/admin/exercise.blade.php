<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Exercise | Admin</title>
    <link rel="stylesheet" href="/assets/css/admin.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">

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
 
    <div class="main-content"> <!------------------------------------------ dashboard -->
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form method="post" action="/admin/addExercise" class="summernote" style="padding-top: 10px;" >
        @csrf
       
        <label for="language" class="label">Language</label>
        <select name="language" id="" class="select">
            <option value="">--Select a Language--</option>
            @foreach ($data as $item)
                <option value="{{ $item->language }}">{{ $item->language }}</option>
            @endforeach
        </select>
        <div style="width: 100%">
            <textarea id="summernote" name="content"></textarea>
        </div>
       <button type="submit" class="button" style="margin-top: 20px;">Add exercise</button>
       <br>
    </form>

    <div class="table">
        <div class="tablebg">
            <div class="heading">
                <h2>Exercise</h2>
                <input class="search" placeholder="Search" id="search">
                <a href="#" class="action" style="display:none;">View All</a>
            </div>
            <table class="manage-user">
                    <tr>
                        <th>Language</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->language }}</td>
                            <td class="ved">
                                <a href="/admin/exercise/{{ urlencode($item->language) }}"><i class="bx bxs-show"></i></a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>

    </div>



    {{-- <p id="exerciseContent">System.<u>out.println</u>("Hello World<u>");</u></p>
    <button onclick="checkAnswers()">Check Answers</button>

    <script>
        var answers = [];
        window.onload = function() {
            
            var fillInBlanks = document.querySelectorAll("u");
            fillInBlanks.forEach(function(uTag, index) {
                var textBox = document.createElement("input");
                textBox.type = "text";
                textBox.placeholder = "Fill in the blank";
                textBox.setAttribute("data-index", index);
                textBox.value = ""; // Set the initial value of the textbox to an empty string
                uTag.parentNode.insertBefore(textBox, uTag);
                uTag.parentNode.removeChild(uTag); // Remove the <u> tag
                answers[index] = uTag.textContent;
            });
            

            var textBoxes = document.querySelectorAll("input[type='text']");
            textBoxes.forEach(function(textBox) {
                var index = parseInt(textBox.getAttribute("data-index"));
                textBox.addEventListener("input", function() {
                    userAnswers[index] = this.value;
                });
            });
        };

        function checkAnswers() {
            
            var correctAnswers = answers;
            var userAnswers = [];

            var textBoxes = document.querySelectorAll("input[type='text']");
            textBoxes.forEach(function(textBox) {
                var index = parseInt(textBox.getAttribute("data-index"));
                userAnswers[index] = textBox.value;
            });

            var score = 0;
            for (var i = 0; i < correctAnswers.length; i++) {
                if (correctAnswers[i] === userAnswers[i]) {
                    score++;
                }
            }
            alert("Your score: " + score + " out of " + correctAnswers.length);
        }
    </script> --}}
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

       // Trigger the search function when the content of the search input changes
       document.getElementById('search').addEventListener('input', search);
   </script>

        <script src="../assets/js/admin/admin.js" async></script>
    </body>
</html>
