let questions = [];

// Get the pathname of the URL
const pathname = window.location.pathname;

// Split the pathname into segments
const segments = pathname.split('/');

// Extract the parameters
const language = segments[2];
const difficulty = segments[3];
const number = segments[4];

// Example usage
console.log('Language:', language); // Output: Java
console.log('Difficulty:', difficulty); // Output: easy
console.log('Number:', number); // Output: 10

$.ajax({
    url: '/admin/getQuiz',
    type: 'GET',
    data: {language: language, difficulty:difficulty, number:number},
    success: function(data) {
        // Populate questions array with the fetched data
        questions = data.slice(0, 15).map(function(item) {
            return {
                numb: item.id,
                question: item.question,
                answer: item.answer,
                options: [
                    item.option1,
                    item.option2,
                    item.option3,
                    item.option4
                ]
            };
        });
        
        console.log(data); // Verify the retrieved data
    },
    error: function(xhr, status, error) {
        console.error('Error fetching questions:', error);
        alert(xhr.responseText);
    }
});