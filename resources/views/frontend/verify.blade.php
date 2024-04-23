<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Learn2Code</title>
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">
    <link rel="stylesheet" href="assets/css/Login.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body style="background-image: url(assets/images/Backlogin.png);">

    <header>
        <a href="/login" class="bx bx-chevron-left" id="back-btn"></a>
    </header>

    <div class="logo">
    <img src="assets/images/Logo.jpg" alt="">
    </div>

      <section class="space-background">
            @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    <p style="">{{ Session::get('error') }}</p>
                </div>
            @endif
            <form action="/verify" method="POST" class="log-form">
            @csrf

                <div class="mobile-logo">
                    <img src="assets/images/Logo.jpg" alt="Logo">
                </div>

                <div class="title">
                <h2>Learn2Code</h2>
                <p>Verify Here</p>
                </div>

                <div class="typeinput">
                  <input required placeholder="Enter Code Here" type="text" id="verification_code" name="verification_code">
                </div>
                <div class="logbutton">
                  <button type="submit" id="login" class="btns">Verify</button>
                </div>
               
            </form>
      </section>

        <script>
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

            document.addEventListener('DOMContentLoaded', function() {
                // Check if there's stored data in localStorage for email and password
                const rememberedEmail = localStorage.getItem('rememberedEmail');
                const rememberedPassword = localStorage.getItem('rememberedPassword');

                // If there is stored data, fill the input fields with the remembered values
                if (rememberedEmail) {
                    document.getElementById('email').value = rememberedEmail;
                }

                if (rememberedPassword) {
                    document.getElementById('password').value = rememberedPassword;
                }

                // Check the checkbox if data is found
                if (rememberedEmail || rememberedPassword) {
                    document.getElementById('remember').checked = true;
                }

                // Handle form submission
                document.querySelector('form').addEventListener('submit', function(event) {
                    // If "Remember Me" is checked, store the email and password in localStorage
                    if (document.getElementById('remember').checked) {
                        const email = document.getElementById('email').value;
                        const password = document.getElementById('password').value;
                        localStorage.setItem('rememberedEmail', email);
                        localStorage.setItem('rememberedPassword', password);
                    } else {
                        // If not checked, clear stored values
                        localStorage.removeItem('rememberedEmail');
                        localStorage.removeItem('rememberedPassword');
                    }
                });
            });
        </script>

</body>

</html>
