<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login | Learn2code</title>
<link rel="shortcut icon" type="x-icon" href="/assets/images/logo.svg">
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

        @if (Session::has('error'))
        <div class="alert alert-danger" role="alert" style="color:rgb(0, 0, 0); width: 100%; margin-top:-30px">
            <p style="">{{ Session::get('error') }}</p>
        </div>
    @endif
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif

    <form action="{{ route('AdminLogin') }}" method="POST" class="content-container1">
        @csrf    
                <div class="logo">
                  <img src="/assets/images/Logo.jpg" alt="learn2Code">
                </div>       

                <div class="title">
                  <h2>Learn2Code</h2>
                  <p>Admin Login</p>
                </div>
                

                <div class="typeinput">    
                  <input required placeholder="Email" type="email" id="email-phone" name="email">
                </div>
                <div class="typeinput">                  
                  <input required placeholder="Password" type="password" id="password" name="password">
                </div>
            
                <div class="logbutton">
                  <button id="login" type="submit" class="btns">Log In</button>
                </div>
                <div class="forgot">
                 
                </div>
            </form>
      </section>

</body>
</html>
