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
  <code>public class MyClass {<br> 
    public static void main(String[] args) { 
      <span class="underline" id="underline1" data-answer="System" onclick="activateUnderline(this)"></span>.
      <span class="underline" id="underline2" data-answer="out" onclick="activateUnderline(this)"></span>.
      <span class="underline" id="underline3" data-answer="println" onclick="activateUnderline(this)"></span>("Hello World");
    }
  </code>
</div>
    <button onclick="checkAnswer1()">Submit</button>

     <p class="additional-info">1 of 10 Questions</p>
  </div>
  

<div id="congratulations">     
 <img src="assets/images/confe2.svg" alt="Left Image" style="position: absolute; left: 125px; top: 20%; transform: translateY(-50%); width: 120px;">
 <img src="assets/images/confet.svg" alt="Right Image" style="position: absolute; right: 125px; top: 20%; transform: translateY(-50%); width: 120px;">
  <h2>CORRECT!</h2>
    <div class="correct-container">
  <p class="correct-answer"> <code> System.out.println </code></p>   
</div>
 <button class="next-btn" onclick="nextQuestion2()"> Next>> </button>
 
    <p class="additional-info2">1 of 10 Questions</p>
</div>

<div id="incorrect">
 <img src="assets/images/robo1.svg" alt="Right Image" style="position: absolute; right: 125px; top: 20%; transform: translateY(-50%); width: 100px;">
 <img src="assets/images/robo2.svg" alt="Left Image" style="position: absolute; left: 125px; top: 20%; transform: translateY(-50%); width: 100px;">
  <h2>INCORRECT!</h2>
   <div class="incorrect-ans">
  <p class="incorrect-answer"> <code> System.out.println </code></p>
</div>
<button class="skip-btn" onclick="nextQuestion2()"> Next>> </button>

    <p class="additional-info3">1 of 10 Questions</p>
</div>





<script src="assets/js/Exercise.js"></script>

</body>
</html>