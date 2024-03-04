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

var formData = new FormData();

formData.append('language', language);
formData.append('difficulty', difficulty);
formData.append('number', number);

$.ajax({
    url: `/admin/getQuiz/${language}/${difficulty}/${number}`,
    type: 'GET',
    data: formData,
    processData: false, // Prevent jQuery from processing the data
    contentType: false,
    success: function(data) {
        // Populate questions array with the fetched data
        questions = data.map(function(item) {
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