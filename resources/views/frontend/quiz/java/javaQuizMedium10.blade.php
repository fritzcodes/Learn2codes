<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Quiz</title>
    <link rel="stylesheet" href="assets/css/quizContent.css">

    
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
 
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">

<style>
    body{
        width: 100%;
        height: 100vh;
        background: url("assets/images/backquiz.svg");
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
            <div class="info">1. You will have only <span>30 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="leave"><a href="{{ route('javaMedium') }}">Exit Quiz</a></button>
            <button class="restart">Continue</button>

        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Java: Medium</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
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
            <i class="bx bx-crown"></i>
        </div>
        <div class="complete_text">Congrats! You've completed the quiz.</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
 
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="assets/js/Java/javaQuemed10.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="assets/js/Java/quizContentmed.js"></script>

</body>
</html>