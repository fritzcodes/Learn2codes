<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

  <link rel="stylesheet" href="../assets/css/adminLogin.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
</head>
<style>
        body {
        text-align: center;
        width: 100%;
        min-height: 100vh;
        background: url('../assets/images/bglog.svg');
        color: var(--text-color);
        overflow-x: hidden; /* Prevent horizontal scrolling */
        z-index: -1; /* Behind other content */
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
                <img src="../assets/images/logo.png" alt="learn2Code">
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
                </div>
            
                <div class="logbutton">
                  <button id="login" type="submit">Create</button>
                </div>
            </form>
      </section>

</body>
</html>
