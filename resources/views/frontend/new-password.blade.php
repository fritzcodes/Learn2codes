<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

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
            background: url('/assets/images/backmenu.svg');
            color: var(--text-color);
            overflow-x: hidden;
            /* Prevent horizontal scrolling */
            z-index: -1;
            /* Behind other content */
            background-size: cover;
            animation: animateBackground 20s linear infinite;
            /* Adjust as needed */
        }


        @keyframes animateBackground {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 100% 100%;
            }
        }

        /* Reset and basic styling */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Orbitron', sans-serif;
            text-decoration: none;
            list-style: none;
        }

        :root {
            /*---font and color defaults --*/
            --bg-color: #fff;
            --text-color: #221341;
            --second-color: #5a7184;
            --main-color: #6e54fa;
            --big-font: 6rem;
            --h2-font: 3rem;
            --p-font: 1.1rem;
        }



        .space-background {
            align-items: center;
            align-content: center;
            justify-content: center;
            width: 80%;
            height: 80vh;
            position: fixed;
            border-radius: 35.066px;
            border: 1px solid #FFDCDC;
            background: radial-gradient(254.43% 143.73% at 6.62% 2.73%, rgba(255, 182, 72, 0.56) 0%, rgba(255, 182, 72, 0.56) 0%, rgba(255, 182, 72, 0.56) 0.01%, rgba(53, 0, 62, 0.08) 100%);
            backdrop-filter: blur(6px);

        }

        /*----------- Content Section------------ */

        .logo img {
            width: 100px;
            height: 100px;   
            margin-top: 0px;
            margin-bottom: 5px;
            color: var(--text-color);
        }

        .title {
            margin: 0px 50px 0px 50px;
            text-align: center;
        }

        .content-section {
            margin: 50px 10px 50px 10px;
        }

        .content-container1 {
            text-align: left;
            align-content: center;
            align-items: center;
            justify-content: center;
            display: inline-block;
            line-height: 20px;

        }

        .content-container1 label {
            font-size: var(--p-font);
            font-weight: 600;
        }

        .content-container1 input {
            border-style: solid;
            text-indent: 7px;
            border-radius: 5px;
            width: 100%;
            height: 35px;
            font-size: var(--p-font);

        }

        .reset-button a {
            font-size: var(--p-font);
            border-radius: 5px;
            background-color: #221341;
            color: var(--bg-color);
            padding: 10px 200px;
        }

        .reset-button a:hover {
            background-color: #680586;
            cursor: pointer;
        }





        @media (max-width: 1300px) {
            header {
                padding: 17px 3%;
                transition: .2s;
            }

            .profile h2 {
                width: 140px;
            }

            :root {
                --big-font: 4.5rem;
                --h2-font: 2.3rem;
                --p-font: 1rem;
                transition: .2s;
            }

            .logo img {
                width: 200px;
                height: 200px;
            }

            .title {
                margin: 0px 200px 0px 200px;
                text-align: center;
            }


        }

        @media (max-width: 1060px) {

            #menu-icon {
                display: block;
            }

            .profile h2 {
                width: 100px;
            }

            .logo img {
                width: 100px;
                height: 100px;
                color: var(--text-color);
            }

            .title {
                margin: 0px 50px 0px 50px;
                text-align: center;
            }

            .content-section {
                margin-top: 20px;
            }

            .content-container1 input {
                width: 100%;

            }

            .reset-button a {
                padding: 10px 200px;
            }


        }



        @media (max-width: 540px) {

            :root {
                --big-font: 2.8rem;
                --h2-font: 2rem;
                --p-font: 0.8rem;
                transition: .2s;
            }


            body {
                padding: 0px 0%;
                animation: paused;
            }

            .space-background {
                padding-top: 120px;
                border-radius: 0px;
                width: 100%;
                height: 100vh;
            }

            .profile h2 {
                width: 170px;
            }

            .navbar {
                position: absolute;
                top: 0;
                right: -100%;
                width: 100%;
                height: 100vh;
                background: #000;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 80px 0%;
                transition: 0.5s all;
            }

            .open {
                right: 0;
            }

            .list {
                width: 70%;
                margin-bottom: 12px;
            }

            .content-section {
                display: inline-block;
            }

            .title {
                margin: 20px 40px 50px 40px;
                text-align: justify;
            }

            .reset-button a {
                padding: 10px 130px;
            }



        }


        @media (max-width: 376px) {
            body {
                animation: paused;
            }

            .profile h2 {
                width: 170px;
            }

            .navbar {
                position: absolute;
                top: 0;
                right: -100%;
                width: 100%;
                height: 100vh;
                background: #000;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 80px 0%;
                transition: 0.5s all;
            }

            .open {
                right: 0;
            }

            .list {
                width: 70%;
                margin-bottom: 12px;
            }

            .space-background {
                padding-top: 50px;
                border-radius: 0px;
                width: 100%;
                height: 100vh;
            }


            :root {
                --big-font: 3.5rem;
                --h2-font: 1.5rem;
                transition: .2s;
            }

            .title {
                margin: 0px 20px 50px 20px;
                text-align: justify;
            }


        }


        @media (max-width: 280px) {
            body {
                animation: paused;
            }

            .profile h2 {
                width: 170px;
            }


            :root {
                --big-font: 2.5rem;
                --h2-font: 1.3rem;
                transition: .2s;
            }

            .content-container1 label {
                font-weight: 600;
            }

            .reset-button a {
                padding: 10px 93px;
            }

            .title {
                margin: 0px 20px 50px 20px;
                text-align: justify;
            }

        }


        @media (min-height: 1024px) {

            .profile h2 {
                width: 170px;
            }

            .navbar {
                position: absolute;
                top: 0;
                right: -100%;
                width: 50%;
                height: 100vh;
                background: #000;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 80px 0%;
                transition: 0.5s all;
            }

            .open {
                right: 0;
            }

            .list {
                width: 70%;
                margin-bottom: 12px;
            }

            :root {
                --big-font: 5rem;
                --h2-font: 2.5rem;
                --p-font: 1.5rem;
                transition: .2s;

            }

            .logo img {
                width: 200px;
                height: 200px;
                margin-top: 100px;
                color: var(--text-color);
            }

            .title {
                margin: 0px 100px 70px 100px;
                text-align: justify;
            }

            .reset-button a {
                padding: 10px 200px;
            }

            .content-container1 input {
                width: 100%;

            }

        }

        @media (min-height: 1300px) {

            .profile h2 {
                width: 170px;
            }

            .navbar {
                position: absolute;
                top: 0;
                right: -100%;
                width: 50%;
                height: 100vh;
                background: #000;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 80px 0%;
                transition: 0.5s all;
            }

            .open {
                right: 0;
            }

            .list {
                width: 70%;
                margin-bottom: 12px;
            }

            :root {
                --big-font: 5rem;
                --h2-font: 2.5rem;
                --p-font: 1.5rem;
                transition: .2s;

            }

            .content-container1 input {
                width: 100%;
            }

            .reset-button a {
                padding: 10px 200px;
            }

            .logo img {
                width: 250px;
                height: 250px;
                margin-top: 150px;
                color: var(--text-color);
            }

            .title {
                margin: 20px 100px 100px 100px;
                text-align: center;
            }

            .reset-button a {
                padding: 10px 200px;
            }

            .content-container1 input {
                width: 100%;

            }

        }
    </style>
</head>

<body">

    <section class="space-background">
        <div class="logo">
            <img src="/assets/images/logo.svg" alt="learn2Code">

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

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
        @endif
        </div>
        <div class="title">
            <h2>This is one-time link to reset password</h2>
        </div>

        <div class="content-section">
            <form action="{{ route('reset.password.post') }}" method="POST" class="content-container1">
                @csrf
                <input type="text" name="token" hidden value="{{ $token }}">
                
                <label for="email">Email address:</label><br>
                <input placeholder="name@example.com" type="email" id="email" name="email"> <br>
                <br>
                <label for="email">Enter new password:</label><br>
                <input placeholder="new password" type="password" id="password" name="password"> <br>
                <br>
                <label for="email">Confirm password:</label><br>
                <input placeholder="confirm password" type="password" id=" confirm_password" name="password_confirmation"><br>
                <br>
                <br>
                <ul class="reset-button">
                    <button><a id="reset">Reset</a></button>
                </ul>

            </form>
        </div>
    </section>
</body>

</html>
