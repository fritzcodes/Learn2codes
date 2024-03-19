// Use distinct names for each variable
const percentageText = document.querySelector('.percentage');
const modulaText = document.querySelector('.modula');
const exerText = document.querySelector('.exer');
const quizText = document.querySelector('.quiz');
const labelTxt = document.querySelector('.label');

setTimeout(() => {
    percentageText.classList.add('active'); // Replace 'process_txt' with the correct variable
}, 0);

// Set the initial percentage
updatePercentage(0);

setTimeout(toggleMsg, 1600);

function toggleMsg() {
    checkLabel(percentageText.textContent);
}

// Function to update the percentage
function updatePercentage(percentage) {
    percentageText.textContent = percentage + 'xp';
}

// Define the functions to update modula, exer, and quiz
function updatemodula(modula) {
    modulaText.textContent = modula + 'xp';
}

function updateexer(exer) {
    exerText.textContent = exer + 'xp';
}

function updatequiz(quiz) {
    quizText.textContent = quiz + 'xp';
}

// Example: Update the percentage after a certain time
setTimeout(() => {
    updatePercentage(50);
}, 1000);

// Example: Update modula after a certain time
setTimeout(() => {
    updatemodula(5);
}, 1000);

// Example: Update exer after a certain time
// setTimeout(() => {
//     updateexer(10);
// }, 1000);

// Example: Update quiz after a certain time
// setTimeout(() => {
//     updatequiz(35);
// }, 1000);

// Function to check the label based on the percentage
function checkLabel(percentage) {
    const xp = parseInt(percentage);
    if (xp >= 200) {
        labelTxt.textContent = 'Master!';
    } else if (xp >= 150) {
        labelTxt.textContent = 'Excellent!';
    } else if (xp >= 100) {
        labelTxt.textContent = 'Good!';
    } else if (xp >= 50) {
        labelTxt.textContent = 'Not_bad!';
    }
    labelTxt.style.display = 'block';
}
