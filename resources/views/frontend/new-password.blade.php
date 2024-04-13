<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="shortcut icon" type="x-icon" href="/assets/images/logo.svg">    
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">

<style>
    
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
}

:root{ /*---font and color defaults --*/
    --bg-color: #210535;
    --main-color: #f5d5e0;
    --text-color: #430d4b;
    --second-color: #7b337d;
    --high-color: #c874b2;
    --big-font: 3rem;
    --h2-font: 1.5rem;
    --p-font: 1rem;
    --font1: 'Orbitron';
    --font2: Helvetica;
    transition: .2s;
}

body {
    background: url('/assets/images/backlogin.png');
    padding: 100px;
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

.space-background {
    width: 45%;
    align-items: center;
    align-content: center;
    justify-content: center;
    border-radius: 35.066px;
    background: var(--main-color);
    backdrop-filter: blur(6px);

}

/*----------- Content Section------------ */
form {
    padding: 30px 20px;
    text-align: right;
    align-content: center;
    align-items: center;
    justify-content: center;

}

.alert {
    width: 50%;
    position: absolute;
    top: 30px;
    right: 0;
    text-align: center;
    padding: 10px;
    background-color: #ee0505; /* Adjust the background color as needed */
    color: var(--main-color); /* Adjust the text color as needed */
    box-shadow: 1px 2px var(--bg-color);
    z-index: 1;
}

.alert.alert-error {
    color: var(--text-color);
    background-color: var(--main-color); /* Adjust the error message color as needed */
}

.mobile-logo {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%; /* Ensures the div takes up full width */
}

.mobile-logo img {
    
    border-radius: 50%;
    width: 100px; /* Adjust as needed */
    height: 100px; /* Adjust as needed */
  }

.head {
    align-items: center;
    display: flex;
    justify-content: space-between;
}

.title{
    display: flex;
    align-items: center;
    font-family: var(--font1);
    color: var(--text-color);
    padding: 15px 0;
    text-align: justify;
}

.title p {
    font-weight: 600;
    margin-left: 5px;
    font-size: var(--p-font);
}

.typeinput {
    font-family: var(--font2);
    display: flex;
    padding: 5px 0;
}

.typeinput input{
    background: var(--main-color);
    border-style: none;
    text-indent: 7px;
    border-radius: 5px;
    border-style: solid;
    width: 100%;
    height: 40px;
    font-size: var(--p-font);
    font-weight: 600;
    color: var(--bg-color);
}

.typeinput input::placeholder {
    font-weight: 100;
    color: var(--text-color);
}

.typeinput .showhide {
    margin: 0 0px 0 10px;
    padding: 10px 15px;
    float: right;
    border-radius: 5px;
    border-style: none;
    cursor: pointer;
    background-color: var(--main-color);
    transition: ease 0.2s;
}

.showhide:hover {
    background: var(--second-color);
    color: var(--main-color);
}

.showhide img {
    width: 15px;
}

.logbutton {
    padding: 10px 0;
    text-align: center;
}

.btns{
    border-style: none;
    font-size: var(--p-font);
    border-radius: 5px;
    background-color: var(--second-color);
    color: var(--main-color);
    width: 100%;
    height: 40px;
    font-weight: 600;
    transition: ease .2s;
}

.btns:hover{
    background-color: var(--text-color);
    cursor: pointer;
}

.links {
    margin: 4px;
    display: flex;
    justify-content: space-between;
}

.remember-me {
    align-items: center;
    color: var(--text-color);
}

.remember-me label {
    font-size: var(--p-font);
}

.forgot a {
    font-size: var(--p-font);
    color: var(--text-color);
}

.forgot a:hover {
    text-decoration-line: underline;
    cursor: pointer;
}

.signing {
    align-items: center;
    display: flex;
    justify-content: left;
}

.signing p {
    margin-left: 7px;
    font-family: var(--font2);
    font-size: var(--p-font);
    color: var(--text-color);
}


/*-----------SIGNUP EXCUSIVE----------*/
.typeinput label #year{
height: 40px;
font-size: var(--p-font);
border-radius: 5px;
background-color: var(--main-color);
border: solid 2px gray;
cursor: pointer;
color: var(--text-color);
}

/* Adjust the position of the error message */
#passwordError {
color: var(--text-color);
display: none;

}

/*-----------RESPONSIVENESS----------*/
@media (max-width: 1300px) {
    :root {
      --h2-head: 2rem;
      --p-head: 1.5rem;
      transition: .2s;
    }
  
    }

@media (max-width: 1024px) {
:root{ /*---font and color defaults --*/
    --h2-font: 1.5rem;
    --p-font: 1rem;
}

    .space-background {
        width: 90%;
    }

    .typeinput input {
        height: 35px;
    }

    .btns {
        height: 35px;
    }

}

@media (max-width: 860px) {
    :root {
      --h2-head: 1.5rem;
      --p-head: 1rem;
      transition: .2s;
    }
  
  }

@media (max-width: 540px) {
    :root{ /*---font and color defaults --*/
        --h2-font: 2.2rem;
        --p-font: 1.1rem;
    }

.space-background {
    background: none;
    position: fixed;
    top: 0;
    width: 100%;
    height: 100vh;
    border-radius: 0px;
}

.title {
    justify-content: center;
}

#back-btn {
    color: var(--text-color);
}

}

@media (max-width: 376px) {
:root{ /*---font and color defaults --*/
    --h2-font: 2rem;
    --p-font: 1rem;
}

}


@media (max-width: 280px) {
    :root{ /*---font and color defaults --*/
        --h2-font: 1.5rem;
        --p-font: .9rem;
    }

    #back-btn {
        margin-left: -20px;
    }


}


@media (min-height: 1024px) {
    :root {
        --h2-font: 2.5rem;
        --p-font: 1.5rem;
    }

    .typeinput input{
        height: 50px;
    }

    .logbutton .btns {
        height: 50px;
    }

    .space-background {
        width: 80%;
    }


}

@media (min-height: 1400px) {
    :root {
        --h2-font: 3rem;
        --p-font: 2rem;
    }

    .logo {
        display: none;
    }

    .typeinput input{
        height: 70px;
    }

    .logbutton .btns {
        height: 70px;
    }

    .space-background {
        width: 85%;
    }
}



</style>

</head>

<body>

    <section class="space-background">
    <form action="{{ route('reset.password.post') }}" method="POST" class="content-container1">
                @csrf
                <input type="text" name="token" hidden value="{{ $token }}">

                <div class="mobile-logo">
                    <img src="/assets/images/Logo.jpg" alt="Logo">
                </div>

                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
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
                    <p>This is one-time link to reset password</p>
                </div>
   
                <div class="typeinput">
                  <input required placeholder="example@gmail.com" type="text" id="email" name="email">
                </div>
                <div class="typeinput">
                <input placeholder="new password" type="password" id="password" name="password" oninput="checkPasswords()">
                <button class="showhide" type="button" onclick="togglePassword('password')">
                    <img id="imageeye" src="/assets/images/view.png" alt="not visible eye">
                  </button>
                </div>
                <div class="typeinput">
                <input placeholder="confirm password" type="password" id="confirm_password" name="password_confirmation" oninput="checkPasswords()">
                </div>
                <div class="signing" style="display: none;">
                  <p>password match</p>
                </div>
                <div class="logbutton">
                  <button type="submit" id="reset" class=btns>Reset</button>
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

            function checkPasswords() {
            var newPassword = document.getElementById('password');
            var confirmPassword = document.getElementById('confirm_password');
            var signingDiv = document.querySelector('.signing');

            if (newPassword.value === confirmPassword.value && newPassword.value !== '') {
                signingDiv.style.display = 'flex';
            } else {
                signingDiv.style.display = 'none';
            }
        }
    </script>

</body>

</html>
