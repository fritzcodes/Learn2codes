<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link rel="pr	econnect" href="https://fonts.googleapis.com">
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



</style>

</head>
<body>
<header>

	<img class="image1 image-cover" src="assets/images/Astro.svg">


	<div class="glass1"> <h2>Sign Up</h2>
        
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-success" role="alert" style="color:rgb(130, 6, 6); margin-left:35%" >
            {{ Session::get('error') }}
        </div>
    @endif
	<form action="{{ route('register') }}" method="POST" class="signup-form">
    @csrf
        <br>
    <input type="email"id="email" name="email" placeholder="Email"required>
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
        </div>

    <button type="submit" style="justify-content: center;">Sign Up</button>

    <p class="para-2">Already have an account? <a href={{ route('login') }}>Login Here</a></p>
 

</div>
</form>


<script> 
//    document.addEventListener('DOMContentLoaded', function () {
//     var dropdown = document.getElementById('yearDropdown');
//     var inputField = document.getElementById('year');
//     var buttonToggle = document.querySelector('.button-toggle');

//     buttonToggle.addEventListener('click', function () {
//         dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
//     });

//     document.addEventListener('click', function (event) {
//         var isClickInside = inputField.contains(event.target) || buttonToggle.contains(event.target) || dropdown.contains(event.target);
//         if (!isClickInside) {
//             dropdown.style.display = 'none';
//         }
//     });

//     dropdown.addEventListener('click', function (event) {
//         event.stopPropagation();
//     });

//     function updatePlaceholder(selectedYear) {
//         inputField.placeholder = selectedYear;
//     }
// });

// function toggleDropdown(dropdownId) {
//     var dropdown = document.getElementById(dropdownId);
//     dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
// }


    

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
</script>

</header>


</body>
</html>