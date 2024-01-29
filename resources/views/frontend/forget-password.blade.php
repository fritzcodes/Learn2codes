<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reset Password</title>
<link rel="stylesheet" href="assets/css/forget.css">

<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
    

<style>
        body {
        text-align: center;
        padding: 90px 10%;
        width: 100%;
        height: 100vh;
        background: url('assets/images/backmenu.svg');
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
    </head>
    <body>

      <section class="space-background">
        <div class="logo">
            <img src="assets/images/logo.svg" alt="learn2Code">
        </div>
        @if($errors->any())
                    <div class="col-12">
                        @foreach ($errors->all() as $error)
                         <div class="alert alert-danger">{{$error}}</div>
                        @endforeach    
                    </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                    @endif
                    
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                    @endif
                </div>

          <div class="title">
          <h2 >We will send a link to your email, use the link to reset password</h2>
          </div>
          
         <div class="content-section">
            <form action="/forget-passwordpost" method="POST" class="content-container1" >
                @csrf
                
                <label for="email">Email address:</label><br>
                <input placeholder="name@example.com" type="text" id="email" name="email">  <br>
                <br>
                <br>
                <ul class="reset-button">
                <button><a id="submit">submit</a></button>
                </ul>
    
            </form>
        </div>
      </section>
    
 


</body>
</html>
