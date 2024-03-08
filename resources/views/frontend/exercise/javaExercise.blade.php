<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Code Exercise</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/assets/css/Exercise.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {

            padding: 90px 10%;
            width: 100%;
            height: 100vh;
            background: url("/assets/images/bg.svg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow: hidden;
            background-size: cover;
        }
    </style>
</head>

<body>

    @if (count($data) == 0)
    <script>
        Swal.fire({
            icon: 'warning',
            text: 'No Exercise Yet.',
            title: 'OOPS'
        }).then(function() {
            window.location.href = '/exercise/selectLanguage';
        })
    </script>
    @else
        <div class="quiz-container" id="quiz-container-1">
            <h2> {!! $data['0']->language !!} Exercise </h2>
            <p id="question-1">Insert the missing part of the code below to output "Hello World".</p>
            <div class="code-container">
                <code id="exerciseContent">{!! $data['0']->content !!}
                    {{-- public class MyClass {<br> 
    public static void main(String[] args) { 
      <span class="underline" id="underline1" data-answer="System" onclick="activateUnderline(this)"></span>.
      <span class="underline" id="underline2" data-answer="out" onclick="activateUnderline(this)"></span>.
      <span class="underline" id="underline3" data-answer="println" onclick="activateUnderline(this)"></span>("Hello World");
      
    } --}}
            </code>
        </div>
        <button onclick="checkAnswers()">Submit</button>

        <p style="color:white; font-family:Arial, Helvetica, sans-serif; margin-left:40px"><span id="itemNumber">1</span> of 10 Questions</p>
    </div>


    <div id="congratulations">
        <img src="/assets/images/confe2.svg" alt="Left Image" style="position: absolute; left: 125px; top: 20%; transform: translateY(-50%); width: 120px;">
        <img src="/assets/images/confet.svg" alt="Right Image" style="position: absolute; right: 125px; top: 20%; transform: translateY(-50%); width: 120px;">
        <h2>CORRECT!</h2>
        <div class="correct-container">
            <p class="correct-answer"> <code id="correctAns"> {!! $data['0']->content !!} </code></p>
        </div>
        <button class="next-btn submitBtn"> Next>> </button>


    </div>

    <div id="incorrect">
        <img src="/assets/images/robo1.svg" alt="Right Image" style="position: absolute; right: 125px; top: 20%; transform: translateY(-50%); width: 100px;">
        <img src="/assets/images/robo2.svg" alt="Left Image" style="position: absolute; left: 125px; top: 20%; transform: translateY(-50%); width: 100px;">
        <h2>INCORRECT!</h2>
        <div class="incorrect-ans">
            <p class="incorrect-answer"> <code id="incorrectAns"> {!! $data['0']->content !!} </code></p>
        </div>
        <button class="skip-btn submitBtn" id="submitBtn"> Next>> </button>


    </div>

    <div id="showScore" style="display: none">
        <img src="/assets/images/confe2.svg" alt="Left Image" style="position: absolute; left: 125px; top: 20%; transform: translateY(-50%); width: 120px;">
        <img src="/assets/images/confet.svg" alt="Right Image" style="position: absolute; right: 125px; top: 20%; transform: translateY(-50%); width: 120px;">
        <h2>Your Score</h2>
        <div class="correct-containers">
            <p class="correct-answers"> <code id="scoreShow"> </code></p>
        </div>
        <button class="next-btn submitBtns"><a href=""> Back</a></button>

    </div>

    <script src="/assets/js/Exercise.js"></script>
    <script>
        var score = 0;
        var answers = [];

        function underlineRel() {

            var fillInBlanks = document.querySelectorAll("#exerciseContent u");
            fillInBlanks.forEach(function(uTag, index) {

                var textBox = document.createElement("input");
                textBox.type = "text";

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
        }
        underlineRel();

        function checkAnswers() {

            var correctAnswers = answers;
            var userAnswers = [];
            console.log(answers);
            var textBoxes = document.querySelectorAll("input[type='text']");
            textBoxes.forEach(function(textBox) {
                var index = parseInt(textBox.getAttribute("data-index"));
                userAnswers[index] = textBox.value;
            });


            var errorCode = 0;
            for (var i = 0; i < correctAnswers.length; i++) {
                if (correctAnswers[i] != userAnswers[i]) {
                    errorCode++;
                }
            }
            if (errorCode > 0) {
                showIncorrect();
            } else {
                showCorrect();
                score++;
                console.log(score);
            }

            //alert("Your score: " + score + " out of " + correctAnswers.length);
        }


        document.addEventListener('DOMContentLoaded', function() {
            const url = window.location.href;
            const parts = url.split('/');
            const id = parts[parts.length - 1];
            const cat = parts[parts.length - 2];
            const activity = id + ", " + cat;
            var dataIndex = 0;
            var dataLength = {!!json_encode(count($data)) !!}; // Get the length of $data
            var data = {!!json_encode($data) !!};
            console.log(activity);
            var exerciseContent = document.getElementById('exerciseContent');
            var correctAns = document.getElementById('correctAns');
            var incorrectAns = document.getElementById('incorrectAns');
            var submitButton = document.getElementById('submitBtn');
            var incorrect = document.getElementById('incorrect');
            var showScore = document.getElementById('showScore');
            var correct = document.getElementById('congratulations');
            var scoreShow = document.getElementById('scoreShow');
            var quiz = document.getElementById('quiz-container-1');


            $('.submitBtn').click(function() {

                dataIndex++;
                $('#itemNumber').html(dataIndex + 1);

                if (dataIndex >= dataLength) {
                    showScore.style.display = "block";
                    incorrect.style.display = "none";
                    quiz.style.display = "none";
                    correct.style.display = "none";
                    answers = [];
                    scoreShow.innerHTML = score;
                    const csrfToken = $('meta[name="csrf-token"]').attr('content');
                    const formData = new FormData();

                    formData.append('activity', activity);
                    formData.append('language', id);
                    formData.append('points', score);


                    $.ajax({
                        url: '/exp',
                        method: 'POST',
                        data: formData,
                        dataType: 'json',
                        processData: false, // Important: Do not process FormData
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in the headers
                        },
                        success: function(data) {
                            console.log(data);
                        },
                        error: function(xhr) {
                            alert(xhr.responseText);
                        }
                    })

                } else {
                    exerciseContent.innerHTML = data[dataIndex].content;
                    correctAns.innerHTML = data[dataIndex].content;
                    incorrectAns.innerHTML = data[dataIndex].content;
                    console.log(data[dataIndex].content);
                    incorrect.style.display = "none";
                    quiz.style.display = "block";
                    correct.style.display = "none";
                    answers = [];
                }

                // Update content of exerciseContent


                underlineRel();


            })


        });
    </script>
    @endif



</body>

</html>