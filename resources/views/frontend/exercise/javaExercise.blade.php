<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="assets/css/Exercise.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <style>
        body {

            padding: 90px 10%;
            width: 100%;
            height: 100vh;
            background: url("assets/images/bg.svg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow: hidden;
            background-size: cover;
        }
    </style>
</head>

<body>


    <div class="quiz-container" id="quiz-container-1">
        <h2>Exercise 1</h2>
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

        <p class="additional-info">1 of 10 Questions</p>
    </div>


    <div id="congratulations">
        <img src="assets/images/confe2.svg" alt="Left Image"
            style="position: absolute; left: 125px; top: 20%; transform: translateY(-50%); width: 120px;">
        <img src="assets/images/confet.svg" alt="Right Image"
            style="position: absolute; right: 125px; top: 20%; transform: translateY(-50%); width: 120px;">
        <h2>CORRECT!</h2>
        <div class="correct-container">
            <p class="correct-answer" > <code id="correctAns"> {!! $data['0']->content !!} </code></p>
        </div>
        <button class="next-btn submitBtn"> Next>> </button>

        <p class="additional-info2">1 of 10 Questions</p>
    </div>

    <div id="incorrect">
        <img src="assets/images/robo1.svg" alt="Right Image"
            style="position: absolute; right: 125px; top: 20%; transform: translateY(-50%); width: 100px;">
        <img src="assets/images/robo2.svg" alt="Left Image"
            style="position: absolute; left: 125px; top: 20%; transform: translateY(-50%); width: 100px;">
        <h2>INCORRECT!</h2>
        <div class="incorrect-ans">
            <p class="incorrect-answer"> <code id="incorrectAns"> {!! $data['0']->content !!} </code></p>
        </div>
        <button class="skip-btn submitBtn" id="submitBtn"> Next>> </button>

        <p class="additional-info3">1 of 10 Questions</p>
    </div>



    <script src="assets/js/Exercise.js"></script>
    <script>
        var score = 0;
        var answers = [];
        function underlineRel(){
          
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
            var dataIndex = 0;
            var dataLength = {!! json_encode(count($data)) !!}; // Get the length of $data
            var data = {!! json_encode($data) !!}

            var exerciseContent = document.getElementById('exerciseContent');
            var correctAns = document.getElementById('correctAns');
            var incorrectAns = document.getElementById('incorrectAns');
            var submitButton = document.getElementById('submitBtn');
            var incorrect = document.getElementById('incorrect');
            var quiz = document.getElementById('quiz-container-1');


            // Event listener for the submit button
            submitButton.addEventListener('click', function() {
              console.log("asdkh");
                // Increment dataIndex
                dataIndex++;

                // Check if dataIndex exceeds dataLength
                if (dataIndex >= dataLength) {
                    
                }else{
                  exerciseContent.innerHTML = data[dataIndex].content;
                  correctAns.innerHTML = data[dataIndex].content;
                  incorrectAns.innerHTML = data[dataIndex].content;
                  console.log(data[dataIndex].content);
                }

                // Update content of exerciseContent
               
                incorrect.style.display = "none";
                quiz.style.display = "block";
                answers = []; 
                underlineRel();
                
            });
        });
    </script>


</body>

</html>
