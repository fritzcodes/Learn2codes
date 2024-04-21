<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Agreement | Learn2Code</title>
    <link rel="stylesheet" href="/assets/css/terms.css">
    <link rel="stylesheet" href="/assets/css/header2.css">
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <a href="#" class="logotext">Learn2Code</a>
    <a href="#" class="logo"><img src="/assets/images/logo.svg" alt=""></a>
        <ul>
            <div>
                @if (session('id'))
                    <div class="alert alert-success">
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </div>
                @else
                    <div class="alert alert-success">
                        <li><a href="login">Login</a></li>
                    </div>
                @endif
            </div>
        </ul>

    </header>

    <section class="sections">
        <img src="assets/images/stars.png" id="stars"> 
        <p>LEARN2CODE<br><span>USER AGREEMENT</span></p>
        <img src="/assets/images/rocket.png" id="rocket" alt="">
    </section>


    <div class="details">
        <div class="title">TERMS AND CONDITIONS</div>
        <div class="deets">
            <h2>Title</h2>
            <p>Paragraph</p>
        </div>    
        <div class="deets">
            <h2>Title</h2>
            <p>Paragraph</p>
        </div>    
        <div class="deets">
            <h2>Title</h2>
            <p>Paragraph</p>
        </div>    

    </div>

</body>
</html>