<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reset Password</title>
<link rel="stylesheet" href="assets/css/forget.css">
<link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">

<link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    
    </head>
    <body style="background-image: url(assets/images/backlogin.png);">
      <section class="space-background">

            <form action="/forget-passwordpost" method="POST" class="content-container1" >
                @csrf

                 <div class="mobile-logo">
                    <img src="assets/images/Logo.jpg" alt="Logo">
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
                </div>
                    @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                    @endif
                </div>

                <div class="title">
                <p>
                    We will send a link to your email,
                    use the link to reset password
                </p>
                </div>

                <div class="typeinput">
                  <input required placeholder="example@gmail.com" type="text" id="email" name="email">
                </div>
                  <button type="submit" id="login" class="btns">submit</button>
                </div>
    
            </form>
      </section>
    
 


</body>
</html>
