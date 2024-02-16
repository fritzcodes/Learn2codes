let currentQuestion = 1;

function checkAnswer1(questionNumber) {
  const answerParts = ["System", "out", "println"];
  let correct = true;

  for (let i = 0; i < answerParts.length; i++) { // Fixed indexing
    const userAnswer = document.getElementById("input" + (i + 1)).value.trim(); // Fixed indexing
    if (userAnswer !== answerParts[i]) {
      correct = false;
      break;
    }
  }

  if (correct) {
    showCorrect();
  } else {
    showIncorrect();
  }
}

function checkAnswer2(questionNumber) {
  const correctAnswers = ["Primitive", "primitive"]; // Both "Primitive" and "primitive" are correct
  let correct = false;

  for (let i = 0; i < correctAnswers.length; i++) {
    const userAnswer = document.getElementById("input" + (i + 1)).value.trim();
    const correctAnswer = correctAnswers[i].toLowerCase();
    console.log("User answer for question 2:", userAnswer); // Add this line for debugging
    console.log("Correct answer:", correctAnswer); // Add this line for debugging
    if (userAnswer.toLowerCase() === correctAnswer) {
      correct = true;
      break;
    }
  }

  if (correct) {
    showCorrect();
  } else {
    showIncorrect();
  }
}


function checkAnswer3(questionNumber) {
  const answerParts = ["*/"];
  let correct = true;

  for (let i = 1; i <= answerParts.length; i++) {
    const userAnswer = document.getElementById("input" + i).value.trim();
    if (userAnswer !== answerParts[i - 1]) {
      correct = false;
      break;
    }
  }

  if (correct) {
    showCorrect();
  } else {
    showIncorrect();
  }
}

function checkAnswer4(questionNumber) {
  const answerParts = ["int"];
  let correct = true;

  for (let i = 1; i <= answerParts.length; i++) {
    const userAnswer = document.getElementById("input" + i).value.trim();
    if (userAnswer !== answerParts[i - 1]) {
      correct = false;
      break;
    }
  }

  if (correct) {
    showCorrect();
  } else {
    showIncorrect();
  }
}

function checkAnswer5(questionNumber) {
  const answerParts = ["String"];
  let correct = true;

  for (let i = 1; i <= answerParts.length; i++) {
    const userAnswer = document.getElementById("input" + i).value.trim();
    if (userAnswer !== answerParts[i - 1]) {
      correct = false;
      break;
    }
  }

  if (correct) {
    showCorrect();
  } else {
    showIncorrect();
  }
}

function checkAnswer6(questionNumber) {
  const answerParts = ["+"];
  let correct = true;

  for (let i = 1; i <= answerParts.length; i++) {
    const userAnswer = document.getElementById("input" + i).value.trim();
    if (userAnswer !== answerParts[i - 1]) {
      correct = false;
      break;
    }
  }

  if (correct) {
    showCorrect();
  } else {
    showIncorrect();
  }
}

function checkAnswer7(questionNumber) {
  const answerParts = ["concat"];
  let correct = true;

  for (let i = 1; i <= answerParts.length; i++) {
    const userAnswer = document.getElementById("input" + i).value.trim();
    if (userAnswer !== answerParts[i - 1]) {
      correct = false;
      break;
    }
  }

  if (correct) {
    showCorrect();
  } else {
    showIncorrect();
  }
}

function checkAnswer8(questionNumber) {
  const answerParts = ["indexOf"];
  let correct = true;

  for (let i = 1; i <= answerParts.length; i++) {
    const userAnswer = document.getElementById("input" + i).value.trim();
    if (userAnswer !== answerParts[i - 1]) {
      correct = false;
      break;
    }
  }

  if (correct) {
    showCorrect();
  } else {
    showIncorrect();
  }
}

function checkAnswer9(questionNumber) {
  const answerParts = ["*"];
  let correct = true;

  for (let i = 1; i <= answerParts.length; i++) {
    const userAnswer = document.getElementById("input" + i).value.trim();
    if (userAnswer !== answerParts[i - 1]) {
      correct = false;
      break;
    }
  }

  if (correct) {
    showCorrect();
  } else {
    showIncorrect();
  }
}

function checkAnswer10(questionNumber) {
  const answerParts = ["\""];
  let correct = true;

  for (let i = 1; i <= answerParts.length; i++) {
    const userAnswer = document.getElementById("input" + i).value.trim();
    if (userAnswer !== answerParts[i - 1]) {
      correct = false;
      break;
    }
  }

  if (correct) {
    showCorrect();
  } else {
    showIncorrect();
  }
}


function showCorrect() {
  const congratulations = document.getElementById("congratulations");
  const currentQuiz = document.getElementById("quiz-container-" + currentQuestion);

  currentQuiz.style.display = "none";
  congratulations.style.display = "block";
}

function showIncorrect() {
  const incorrect = document.getElementById("incorrect");
  const currentQuiz = document.getElementById("quiz-container-" + currentQuestion);

  currentQuiz.style.display = "none";
  incorrect.style.display = "block";
}

function nextQuestion1() {
  const congratulations = document.getElementById("congratulations");
  const incorrect = document.getElementById("incorrect");
  window.location.href = 'java1.html';


  currentQuestion++;

  if (currentQuestion <= 10) {
    const nextQuiz = document.getElementById("quiz-container-" + currentQuestion);
    nextQuiz.style.display = "grid";
  } else {
    // You can add logic here for what happens after the last question
    alert("Quiz completed!");
  }
}

function nextQuestion2() {
  const congratulations = document.getElementById("congratulations");
  const incorrect = document.getElementById("incorrect");
  window.location.href = 'java2.html';

  currentQuestion++;

  if (currentQuestion <= 10) {
    const nextQuiz = document.getElementById("quiz-container-" + currentQuestion);
    nextQuiz.style.display = "grid";
  } else {
    // You can add logic here for what happens after the last question
    alert("Quiz completed!");
  }
}

function nextQuestion3() {
  const congratulations = document.getElementById("congratulations");
  const incorrect = document.getElementById("incorrect");
  window.location.href = 'java3.html';

  currentQuestion++;

  if (currentQuestion <= 10) {
    const nextQuiz = document.getElementById("quiz-container-" + currentQuestion);
    nextQuiz.style.display = "grid";
  } else {
    // You can add logic here for what happens after the last question
    alert("Quiz completed!");
  }
}

function nextQuestion4() {
  const congratulations = document.getElementById("congratulations");
  const incorrect = document.getElementById("incorrect");
  window.location.href = 'java4.html';

  currentQuestion++;

  if (currentQuestion <= 10) {
    const nextQuiz = document.getElementById("quiz-container-" + currentQuestion);
    nextQuiz.style.display = "grid";
  } else {
    // You can add logic here for what happens after the last question
    alert("Quiz completed!");
  }
}

function nextQuestion5() {
  const congratulations = document.getElementById("congratulations");
  const incorrect = document.getElementById("incorrect");
  window.location.href = 'java5.html';

  currentQuestion++;

  if (currentQuestion <= 10) {
    const nextQuiz = document.getElementById("quiz-container-" + currentQuestion);
    nextQuiz.style.display = "grid";
  } else {
    // You can add logic here for what happens after the last question
    alert("Quiz completed!");
  }
}

function nextQuestion6() {
  const congratulations = document.getElementById("congratulations");
  const incorrect = document.getElementById("incorrect");
  window.location.href = 'java6.html';
 

  currentQuestion++;

  if (currentQuestion <= 10) {
    const nextQuiz = document.getElementById("quiz-container-" + currentQuestion);
    nextQuiz.style.display = "grid";
  } else {
    // You can add logic here for what happens after the last question
    alert("Quiz completed!");
  }
}

function nextQuestion7() {
  const congratulations = document.getElementById("congratulations");
  const incorrect = document.getElementById("incorrect");
  window.location.href = 'java7.html';


  currentQuestion++;

  if (currentQuestion <= 10) {
    const nextQuiz = document.getElementById("quiz-container-" + currentQuestion);
    nextQuiz.style.display = "grid";
  } else {
    // You can add logic here for what happens after the last question
    alert("Quiz completed!");
  }
}

function nextQuestion8() {
  const congratulations = document.getElementById("congratulations");
  const incorrect = document.getElementById("incorrect");
  window.location.href = 'java8.html';


  currentQuestion++;

  if (currentQuestion <= 10) {
    const nextQuiz = document.getElementById("quiz-container-" + currentQuestion);
    nextQuiz.style.display = "grid";
  } else {
    // You can add logic here for what happens after the last question
    alert("Quiz completed!");
  }
}

function nextQuestion9() {
  const congratulations = document.getElementById("congratulations");
  const incorrect = document.getElementById("incorrect");
  window.location.href = 'java9.html';


  currentQuestion++;

  if (currentQuestion <= 10) {
    const nextQuiz = document.getElementById("quiz-container-" + currentQuestion);
    nextQuiz.style.display = "grid";
  } else {
    // You can add logic here for what happens after the last question
    alert("Quiz completed!");
  }
}

function nextQuestion10() {
  const congratulations = document.getElementById("congratulations");
  const incorrect = document.getElementById("incorrect");
  window.location.href = 'java10.html';


  currentQuestion++;

  if (currentQuestion <= 10) {
    const nextQuiz = document.getElementById("quiz-container-" + currentQuestion);
    nextQuiz.style.display = "grid";
  } else {
    // You can add logic here for what happens after the last question
    alert("Quiz completed!");
  }
}

function activateUnderline(underline) {
  // Check if the underline is already active (input box is shown)
  if (!underline.classList.contains('active')) {
    // If not active, make it active
    underline.classList.add('active');

    // Create an input box
    const input = document.createElement('input');
    input.type = 'text';
    input.className = 'underline-input';
    input.id = 'input' + underline.id.charAt(underline.id.length - 1);

    // Add an event listener to hide the input box when it loses focus
    input.addEventListener('blur', function () {
      if (input.value.trim() === '') {
        underline.classList.remove('active');
      }
    });

    // Replace the underline with the input box
    underline.innerHTML = '';
    underline.appendChild(input);

    // Focus on the input box
    input.focus();
  }
}
document.addEventListener('DOMContentLoaded', function () {
  const underline1 = document.getElementById('underline1');
  const underline2 = document.getElementById('underline2');
  const underline3 = document.getElementById('underline3');

  activateUnderline(underline1);
  activateUnderline(underline2);
  activateUnderline(underline3);

  // Check if the active element is not any of the underlines, set it to the first underline
  if (![underline1, underline2, underline3].includes(document.activeElement)) {
    activateUnderline(underline1);
  }
});

document.addEventListener('DOMContentLoaded', function () {
  // Get the quiz container
  const quizContainer = document.getElementById('quiz-container');
  
  // Shuffle the quiz items
  shuffleChildren(quizContainer);
});

// Function to shuffle the child elements of a parent element
function shuffleChildren(parent) {
  // Convert NodeList to array for easier manipulation
  const childrenArray = Array.from(parent.children);
  
  // Shuffle the child elements
  childrenArray.sort(() => Math.random() - 0.5);
  
  // Append shuffled child elements back to the parent
  childrenArray.forEach(child => parent.appendChild(child));
}


document.addEventListener('DOMContentLoaded', function () {
    const totalQuestions = 10;

    for (let i = 1; i <= totalQuestions; i++) {
        const inputField = document.getElementById(`input${i}`);
        if (inputField) {
            inputField.addEventListener('keydown', function (event) {
                if (event.key === 'Enter') {
                    console.log(`Enter key pressed for question ${i}`);
                    checkAnswer(i); // Call the checkAnswer function with the question number
                }
            });
        }
    }
});

function checkAnswer(questionNumber) {
    const userAnswer = document.getElementById(`input${questionNumber}`).value.trim();
    switch (questionNumber) {
        case 1:
            console.log('Checking answer for question 1:', userAnswer);
            checkAnswer1(userAnswer);
            break;
        case 2:
            console.log('Checking answer for question 2:', userAnswer);
            checkAnswer2(userAnswer);
            break;
        case 3:
            console.log('Checking answer for question 3:', userAnswer);
            checkAnswer3(userAnswer);
            break;
        // Add cases for other questions as needed
        default:
            console.error('Invalid question number:', questionNumber);
            break;
    }
}

// Add similar checkAnswer functions for other questions as needed


// Add similar checkAnswer functions for other questions as needed



            









