<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Admin | Learn2code</title>
<link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">
  <link rel="stylesheet" href="../assets/css/adminLogin.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<style>
     body {       
            background: url('/assets/images/backlogin.png');
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh; /* Use full viewport height */
            margin: 0; /* Remove default body margin */
            background-size: cover;
            animation: animateBackground 20s linear infinite; /* Adjust as needed */
              }
              @keyframes animateBackground {
                0% {
                  background-position: 0 0;
                }
                100% {
                  background-position: 100% 100%;
                }
              }

</style>
<body>

      <section class="space-background">

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

    <form action="/admin/createAccountPost" method="POST" class="content-container1">
        @csrf    
                <div class="logo">
                  <img src="/assets/images/Logo.jpg" alt="learn2Code">
                </div>       

                <div class="title">
                  <h2>Learn2Code</h2>
                  <p>Admin Creation</p>
                </div>
                

                <div class="typeinput">    
                  <input required placeholder="Email" type="text" id="email-phone" name="email">
                </div>
                <div class="typeinput">    
                    <input required placeholder="Admin Name" type="text" id="username" name="username">
                </div>
                <div class="typeinput">                  
                  <input required placeholder="Password" type="password" id="password" name="password">
                  <button class="showhide" type="button" onclick="togglePassword('password')">
                    <img id="imageeye" src="/assets/images/view.png" alt="not visible eye">
                  </button>
                </div>
            
                <div class="logbutton">
                  <button id="login" type="submit" class="btns">Create</button>
                </div>
            </form>
      </section>

      <script>
                    function togglePassword(inputId) {
                var passwordInput = document.getElementById(inputId);
                var imageeye = passwordInput.parentNode.querySelector('img');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    imageeye.src = '/assets/images/hidden.png';
                } else {
                    passwordInput.type = 'password';
                    imageeye.src = '/assets/images/view.png';
                }
            }
      </script>

</body>
</html>
