<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $id }} Quiz</title>
    <link rel="stylesheet" href="/assets/css/quizContent.css">
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">

    
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
 <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
    body{
        width: 100%;
        height: 100vh;
        background: url("/assets/images/Backlogin.png");
        overflow: hidden; /* Prevent horizontal scrolling */
        z-index: -1; /* Behind other content */
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
    
</style>

</head>
<body>

    {{-- <!-- start Quiz button -->
    <div class="start_btn"><button>Start Quiz</button></div> --}}

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Quiz Rules</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>{{ $diff == "easy" ? 15 : ($diff == "medium" ? 30 : 60) }} seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <a onclick="window.history.back()"><button class="leave">Exit</button></a>
            <button class="restart">Continue</button>

        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">{{ $id . ': ' . $diff }}</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">
                {{ $diff == "easy" ? 15 : ($diff == "medium" ? 30 : 60) }}
                </div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="bx bx-trophy"></i>
        </div>
        <div class="complete_text">CONGRATULATIONS!<br><span>You've completed the quiz.</span></div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Try Again</button>
            <button class="quit">Quit Quiz</button>
 
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="/assets/js/Java/javaQueeasy15.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="/assets/js/Java/quizContenteasy.js"></script>

</body>
</html>