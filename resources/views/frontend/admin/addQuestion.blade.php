<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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

                <a target="_top" href="{{ route('Question') }}" class='active'>
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
                <a target="_top" href="{{ route('adminLogout') }}">
                    <i class="bx bxs-exit"></i>
                    <span class="nav-item">Logout</span>
                </a>
            </li>
        </ul>

    </div>

    <!-- -----------MAIN CONTENT------------ -->
    <div class="main-content"> <!----------------------------    quiz -->

        <form action="/admin/addQuestion" method="post">
            @csrf
            <div class="form">
                <div class="quesDiv">
                    <label for="que">Question</label>
                    <br>
                    <textarea required name="question" id="" cols="30" rows="10" placeholder="Type a question..."></textarea>
                    <br>
                </div>

                <div class="optionDiv">
                    <label for="ops" id="option">Options</label>
                    <p>Option 1:</p> <input required type="text" name="option1" id=""><br>
                    <p>Option 2:</p> <input required type="text" name="option2" id=""><br>
                    <p>Option 3:</p> <input required type="text" name="option3" id=""><br>
                    <p>Option 4:</p> <input required type="text" name="option4" id=""><br>
                </div>

                <div class="ansDiv">
                    <label for="ans">Answer </label>
                    <input required type="text" name="answer" id="" class="input">

                    <div class="langDiv">
                        <label for="lang">Programming Language</label>
                        <select name="language" id="">
                            @foreach($progLanguage as $item)
                                <option value="{{ $item->language }}">{{ $item->language }}</option>
                            @endforeach
                        </select><br>
                    </div>

                    <div class="difDiv">
                        <label for="dif">Difficulty</label>
                        <select name="level" class="input" id="">
                            <option value="easy">Easy</option>
                            <option value="medium">Medium</option>
                            <option value="hard">Hard</option>
                        </select>
                    </div>
                    <button onclick="" id="add_question" type="submit" value="Add Question">Submit</button>
                </div>
            </div>
        </form>

        <div class="table">
            <div class="tablebg">
                <div class="heading">
                    <h2>Quiz</h2>
                    <input class="search" placeholder="Search" id="search">
                    <a href="#" class="action">View All</a>
                </div>
                <table class="quiz">
                    <thead>
                        <td>Questions</td>
                        <td class="medium-column">Answers</td>
                        <td class="small-column">Language</td>
                        <td class="small-column">Difficulty</td>
                        <td>Options</td>
                        <td>Actions</td>
                    </thead>
                    <tbody>
                        @foreach ($questions as $question)
                        <form method="POST" action="/admin/deleteQuestion?id={{ $question->id }}">
                            @csrf
                            <tr>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->answer }}</td>
                                <td>{{ $question->language }}</td>
                                <td>{{ $question->level }}</td>
                                <td>{{ $question->option1 . ' | ' . $question->option2 . ' | ' . $question->option3 . ' | ' . $question->option4 }}</td>
                                <td class="ved">
                                    <i class="bx bxs-show"></i>
                                    <i class="bx bxs-edit"></i>
                                    <button type="submit" class="bx bxs-trash"></button>
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../assets/js/admin/admin.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

</body>

</html>