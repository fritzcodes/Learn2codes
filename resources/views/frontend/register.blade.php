<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="shortcut icon" type="x-icon" href="assets/images/Logo.jpg">
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <style>
    
        body {
            background: url('assets/images/bgsign.svg') no-repeat;
            background-attachment: fixed;
            background-size: cover;
            padding: 0;
            margin: 0;
        }
    
        .image1 {
            display: block;
            height: auto;
            width: 40%;
            margin-top: 215px;
            margin-left: auto;
            margin-right: 66px;
            background-color: transparent;
            border: none;
            box-shadow: none;
            outline: none;
        }   

        .alert {
            position: absolute;
            top: 0;
            left: 0;
            width: 85%;
            text-align: center;
            padding: 10px;
            background-color: #e5e5e5; /* Adjust the background color as needed */
            color: #333; /* Adjust the text color as needed */
            z-index: 1;
        }

        .alert.alert-success {
            background-color: #aaffaa; /* Adjust the success message color as needed */
        }

        .alert.alert-error {
            background-color: #ffaaaa; /* Adjust the error message color as needed */
        }

        /* Adjust the position of the error message */
        #passwordError {
            color: rgb(42, 2, 2);
            display: none;
            margin-bottom: 10px; /* Adjust the margin as needed */
            margin-top: -10px; /* Adjust the margin-top to bring it up a little bit */
        }
    
    </style>

</head>
<body>
<header>

    <img class="image1 image-cover" src="assets/images/Astro.svg">
    <div class="glass1"> 
        <h2>Sign Up</h2>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-error">
            {{ Session::get('error') }}
        </div>
        @endif
        <form action="{{ route('register') }}" method="POST" class="signup-form" onsubmit="return validatePasswords()">
            @csrf
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="text" id="username" name="username" placeholder="User Name" required>
            <input type="text" id="fname" name="fname" placeholder="First Name" required>
            <input type="text" id="lname" name="lname" placeholder="Last Name" required>

            <div class="selectYear-container">
                <ul class="dropdown" id="yearDropdown">
                    <select id="yearDropdown" name="year" >
                        <option value="">---Select Year---</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                    </select>
                </ul>
            </div>

            <div class="password-container">    	
                <input type="password" id="password" name="password" placeholder="Password" required>
                <span class="password-toggle" onclick="togglePassword('password')">
                    <img id="eyeImage1" src="assets/images/hidden.png" alt="not visible eye"> 	
                </span>
            </div>
            <div class="password-container1"> 
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                <span class="password-toggle" onclick="togglePassword('confirmPassword')">
                    <img id="eyeImage2" src="assets/images/hidden.png" alt="not visible eye">
                </span>
                <p id="passwordError">Passwords do not match!</p> <!-- Removed the margin-bottom -->
            </div>
            <button type="submit">Sign Up</button>
            <p class="para-2">Already have an account? <a href={{ route('login') }}>Login Here</a></p>
        </form>
    </div>
</header>
<script> 
function togglePassword(inputId) {
    var passwordInput = document.getElementById(inputId);
    var eyeImage = passwordInput.parentNode.querySelector('img');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeImage.src = 'assets/images/view.png';
    } else {
        passwordInput.type = 'password';
        eyeImage.src = 'assets/images/hidden.png';
    }
}

function validatePasswords() {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    var errorElement = document.getElementById('passwordError');

    if (password !== confirmPassword) {
        errorElement.style.display = 'block';
        return false; // Prevent form submission
    } else {
        errorElement.style.display = 'none';
        return true; // Allow form submission
    }
}
</script>
</body>
</html>
