
// Example JavaScript code to simulate fetching data from the database
        setTimeout(function () {
            // Simulated data
            const Username = "Castlee_01";
            const First = "Robert";
            const Last = "Larisma";
            const Course = "BSIT";
            const year = "4th Year";
            const Email = "robertlarisma01@gmail.com";

            // Update input fields with fetched data
            document.getElementById("Username").value = Username;
            document.getElementById("firstName").value = First;
            document.getElementById("lastName").value = Last;
            document.getElementById("Course").value = Course;
            document.getElementById("year").value = year;
            document.getElementById("email").value = Email;
        }, 1000); // Simulating a delay of 1 second for data fetching

document.addEventListener("DOMContentLoaded", function() {
        const imageContainer = document.querySelector(".imageContainer");
        const displayedImage = document.querySelector(".displayedImage");

        // Set a timeout to display the image after 1 second (1000 milliseconds)
        setTimeout(function() {
            // Show the image by changing its display property
            displayedImage.style.display = "block";
        }, 1000);
    });

