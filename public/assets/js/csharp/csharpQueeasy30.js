let questions = [];

$.ajax({
    url: 'admin/getQuizEasyCsharp',
    type: 'GET',
    success: function(data) {
        // Populate questions array with the fetched data
        questions = data.slice(0, 30).map(function(item) {
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