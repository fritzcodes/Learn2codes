<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Learn2code</title>
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">
    <link rel="stylesheet" href="assets/css/Login.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body style="background-image: url(assets/images/Backlogin.png)";>

    <header>
        <a href="/" class="bx bx-chevron-left" id="back-btn"></a>
    </header>

    <div class="logo">
        <img src="assets/images/Logo.jpg" alt="">
    </div>

    <section class="space-background">

        <form action="{{ route('register') }}" method="POST" class="signup-form" onsubmit="return validatePasswords()">
            {{-- @if (Session::has('success'))
              <div class="alert alert-success">
                  {{ Session::get('success') }}
              </div>
              @endif --}}
            @if (Session::has('error'))
                <div class="alert alert-error">
                    {{ Session::get('error') }}
                </div>
            @endif

            @csrf
            <div class="title">
                <h2>Learn2Code</h2>
                <p>Sign Up</p>
            </div>

            <div class="inputs">
                <div class="typeinput">
                    <input required placeholder="Email" type="text" id="email" name="email">
                </div>
                <div class="typeinput">
                    <input required placeholder="Username" type="text" id="username" name="username">
                </div>
                <div class="typeinput">
                    <input required placeholder="Firstname" type="text" id="fname" name="firstname">
                </div>
                <div class="typeinput">
                    <input required placeholder="Lastname" type="text" id="lname" name="lastname">
                </div>
                <div class="typeinput">
                    <input required placeholder="Course" type="text" id="course" name="course"
                        style="margin-right: 5px;">
                    <label for="year">
                        <select name="year" id="year">
                            <option>--Year--</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </label>
                </div>
                <div class="typeinput">
                    <input required placeholder="Password" type="password" id="password" name="password"
                        onkeyup="displayPasswordStrengthMessage(this.value)">
                    <div id="passwordStrengthMessage"></div>
                   
                    <button class="showhide" type="button" onclick="togglePassword('password')">
                        <img id="imageeye" src="assets/images/view.png" alt="not visible eye">
                    </button>
                </div>
                <div class="typeinput">
                    <input required placeholder="Confirm password" type="password" id="confirmPassword"
                        name="confirmpassword">
                    <button class="showhide" type="button" onclick="togglePassword('confirmPassword')">
                        <img id="imageeye" src="assets/images/view.png" alt="not visible eye">
                    </button>
                </div>
                <div class="typeinput">
                    <p id="passwordError">Passwords do not match!</p> <!-- Removed the margin-bottom -->
                </div>
                <div class="terms">
                    <input type="checkbox" name="check" id="check" required>
                    <label for="check">By continuing you agree to our <a href="/termsign">Terms and Conditions</a>
                        and acknowledge that you understand <a href="/termsign">Privacy Policy
                        </a><span>*</span></label>
                </div>
            </div>
            <div class="logbutton">
                <button type="submit" onclick="document.location='#'" id="login" class="btns">Sign Up</button>
            </div>
            <div class="signing">
                <p>Existing account</p>
                <a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </section>

    <script>
        function togglePassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            var eyeImage = passwordInput.parentNode.querySelector('img');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeImage.src = 'assets/images/hidden.png';
            } else {
                passwordInput.type = 'password';
                eyeImage.src = 'assets/images/view.png';
            }
        }

        function togglePassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            var imageeye = passwordInput.parentNode.querySelector('img');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                imageeye.src = 'assets/images/hidden.png';
            } else {
                passwordInput.type = 'password';
                imageeye.src = 'assets/images/view.png';
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

    <script>
        // Check if the session has a success message
        @if (Session::has('success'))
            // Display Swal.fire notification for success
            Swal.fire({
                icon: 'success',
                title: 'Registration Successful!',
                text: '{{ Session::get('success') }}',
                showConfirmButton: true, // Show the confirm button
                confirmButtonText: 'OK', // Text for the confirm button
                allowOutsideClick: false // Prevent dismissing the notification by clicking outside
            }).then((result) => {
                // Redirect to the login page when the confirm button is clicked
                if (result.isConfirmed) {
                    window.location.href = '{{ route('login') }}';
                }
            });
        @endif
    </script>
    <script>
      function checkPasswordStrength(password) {
          // Regular expressions to check for different criteria of password strength
          const strongRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
          const mediumRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
      
          if (strongRegex.test(password)) {
              return 'strong';
          } else if (mediumRegex.test(password)) {
              return 'medium';
          } else {
              return 'weak';
          }
      }
      
      // Function to display password strength message with color
      function displayPasswordStrengthMessage(password) {
          const strength = checkPasswordStrength(password);
          let message = '';
      
          if (strength === 'strong') {
              message = '<span style="color: green;">Strong password</span>';
          } else if (strength === 'medium') {
              message = '<span style="color: white;">Medium password</span>';
          } else {
              message = '<span style="color: red;">Weak password</span>';
          }
      
          document.getElementById('passwordStrengthMessage').innerHTML = message;
      }
      </script>
      




</body>

</html>
