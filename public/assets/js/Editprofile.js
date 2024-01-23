
function openFileInput() {
    
    document.querySelector('.profile-image').click();
}



function previewImage() {
    var input = document.querySelector('.profile-image');
    var icon = document.querySelector('.profile-icon');
    var cancelButton = document.querySelector('.cancel-button');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            // Check if the selected file is a valid image format
            if (isValidImageFormat(input.files[0].name)) {
                icon.style.backgroundImage = 'url(' + e.target.result + ')';
                icon.style.backgroundSize = 'cover';
                icon.innerHTML = '';
                cancelButton.style.display = 'block';
            } else {
                alert('Please upload a valid image format (PNG, JPG, or JPEG).');
                // Reset the input field value to prevent displaying an invalid image
                input.value = '';
            }
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Function to check if the file has a valid image format
function isValidImageFormat(fileName) {
    var allowedFormats = ['png', 'jpg', 'jpeg'];
    var extension = fileName.split('.').pop().toLowerCase();
    return allowedFormats.includes(extension);
}



function cancelUpload() {
    
    var icon = document.querySelector('.profile-icon');
    var cancelButton = document.querySelector('.cancel-button');
    var input = document.querySelector('.profile-image');

    // Reset the input field value to allow re-selection of the same image
    input.value = '';

    icon.style.backgroundImage = 'url("../assets/user.png")';
    icon.innerHTML = '';

    // cancelButton.style.display = 'none';
}



function validateForm() {

    var firstName = document.getElementById('firstname').value;
    var lastName = document.getElementById('name').value;
    var course = document.getElementById('course').value;
    var yearLevel = document.getElementById('Years').value;
    var username = document.getElementById('username').value;
    var email = document.getElementById('Email').value;


    var icon = document.querySelector('.profile-icon');
        if (icon.style.backgroundImage === '' || icon.style.backgroundImage === 'url("../assets/user.png")') {
            alert('Please upload a profile picture first and fill the required fields.');
            return false;
        }
	




     // Simple validation, check if the required fields are not empty
            
          if (firstName === '' || lastName === '' || course === '' || yearLevel === 'Your Year Level?' || username === '' || email === '') {
                alert('Please fill in all required fields.');
                return false;
        }

     // You can add more complex validation rules here based on your requirements

            return true; // Form is valid
        }



function submitForm() {


      if (validateForm()) {


        // Perform any additional actions needed before submission

        // Clear the form inputs
        document.getElementById('firstname').value = '';
        document.getElementById('name').value = '';
        document.getElementById('course').value = '';
        document.getElementById('Years').selectedIndex = 0;
        document.getElementById('username').value = '';
        document.getElementById('Email').value = '';

        // Reset profile icon and cancel button
        cancelUpload();

        // Display verification message
        document.getElementById('verification-message').style.display = 'block';
    }
}



function resetForm() {

    // Reset form inputs
    document.getElementById('firstname').value = '';
    document.getElementById('name').value = '';
    document.getElementById('course').value = '';

    // Reset the "Years" dropdown to its default option
    document.getElementById('Years').selectedIndex = 0;

    document.getElementById('username').value = '';
    document.getElementById('Email').value = '';

    // Reset profile icon and cancel button
    cancelUpload();

    // Hide verification message
    document.getElementById('verification-message').style.display = 'none';
}
