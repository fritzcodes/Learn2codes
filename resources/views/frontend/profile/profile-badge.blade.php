<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>My Programming Badge</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">


    <style>
*{
padding: 0;
margin: 0;
box-sizing: border-box;
font-family: 'Orbitron', sans-serif;
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

body{
  padding-top: 80px;
  overflow-x: hidden;
  width: 100%;
  min-height: 100vh;
  background: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background: linear-gradient(-90deg, #430d4b, #7b337d, #f5d5e0 );
  background-size: 400% 400%;
  animation: gradientShift 15s ease infinite;
}

@keyframes gradientShift {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

  .head {
  width: 100%;
  align-content: center;
}

.head ul {
  display: flex;
  justify-content: center;
}

.head ul li {
  margin: 10px;
  transition: all .38s ease;
}

.head ul li:hover {
    transform: scale(1.2);
}

.head ul li a {
  color: var(--main-color);
  padding: 10px;
  transition: all .38s ease;
  display: flex;
  align-items: center;
}

.head ul li a:hover {
  border-radius: 5px;
}

.active {
    border-radius: 5px;
    background-color: var(--high-color);
    color: var(--bg-color);
}

.team{
position: relative;
width: 100%;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
}

  .team-content {
    width: 95%;
    max-width: 1350px;
    margin: 20px 40px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, auto));
    align-items: center;
    gap: 2rem;
    text-align: center;
    margin-top: 4rem;
    display: none;
  }

  #div1 {
  display: grid;
}

.badge img{
border-radius: 100%;
width: 200px;
height: 200px;
margin-bottom: 15px;

}
.center h1{
color: #fff;
font-size: var(--big-font);
text-align: center;
}
.badge{
padding: 16px;
background: var(--main-color);
border-radius: 15px;
transition: all .38s ease;
background: linear-gradient(0deg,  #210535, #430d4b, #7b337d, #f5d5e0 );
}
.badge:hover {
transform: translateY(-10px);
cursor: pointer;
}

.badge h2{
font-size: var(--h2-font);
font-weight: 600;
color: var(--main-color);
margin-bottom: 8px;
}
.badge p{
font-size: var(--p-font);
font-weight: 600;
color: var(--second-color);
margin-bottom: 15px;
letter-spacing: 2px;
}

.btns {
    display: inline-block;
    background: var(--high-color);
    color: var(--text-color);
    font-size: var(-p-font);
    padding: 5px 8px;
    border-radius: 5px;
    border: none;
    transition: all .38s ease;
}

.btns:hover {
    cursor: pointer;
    transform: scale(1.2);
    background: var(--second-color);
}

    /*----------- Content Section------------ */
  



     /* -------RESPONSIVENESS======= */
@media (max-width: 1300px) {
  :root {
    --big-font: 4.5rem;
    --h2-font: 2.3rem;
    --p-font: 1rem;
    transition: .2s;
  }

.team{
  width: 100%;
  padding: 40px 2%;
}
.center h1{
  font-size: var(--big-font);
}


  }

@media (max-width: 860px) {
  .head ul li a p {
  display: none;
}

.active {
background-color: var(--high-color);
}

}

@media (max-width: 540px) {

  :root {
    --big-font: 2.8rem;
    --h2-font: 2rem;
    --p-font: 0.8rem;
    transition: .2s;
  }

.head ul li {
  margin: 5px;
  overflow-x: hidden;
}

}

@media (max-width: 376px) {
    :root {
    --big-font: 3.5rem;
    --h2-font: 1.5rem;
    transition: .2s;
  }

}


@media (max-width: 280px) {
    :root {
    --big-font: 3.5rem;
    --h2-font: 1.5rem;
    transition: .2s;
  }

}

@media (min-height: 1024px) {
  :root {
    --big-font: 4.5rem;
    --h2-font: 2.5rem;
    --p-font: 1.5rem;
    transition: .2s;

}

}
    </style>
</head>

<body>

    <header>
        <a href="{{ route('profile') }}" class="bx bx-chevron-left" id="back-btn"></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">

            <ul class="profile">
                <button><a href="{{ route('profile') }}" class="profile-link">

                        @if (Auth::check() && Auth::user()->profile_photo)
                        <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : 'assets/images/avatar.png' }}" alt="Profile Photo" class="avatar">
                        @else
                        <!-- Placeholder image or default avatar -->
                        <img src="assets/images/avatar.png" alt="Default Avatar" class="avatar">
                        @endif
                        <h2>{{ Auth::user()->username }}</h2>
                    </a></button>
            </ul>

            <li><a href="/startmenu">Home</a></li>
            <li><a href="/forum">Forums</a></li>
            <li><a href="/Playground">Playground</a></li>
            <li><a href="/module/moduleLanguage">Modules</a></li>
            <li><a href="/leaderboard">Leaderboard</a></li>
            <li><a class="logout-btn" href="{{ route('logout') }}">Logout</a></li>

        </ul>

    </header>

        <section class="team">
            <div class="center">
                <h1>My Badge</h1>
            </div>


        <div class="head">
        <ul>
                <li><a href="#" onclick="showDiv('div1', this);" class="active"><i class='bx bx-border-all'></i><p>List</p></a></li>
                <li><a href="{{ route('badge.search') }}" onclick="showDiv('div2', this);" type="button" class="btn-primary"><i class='bx bxs-collection'></i><p>Badge Collection</p></a></li>
        </ul>
        </div>

         <div id="div1" class="team-content">
            <!-- Badge 1 -->
            @foreach ($data as $item)

                <?php $percentage = 0;
                $language = $item->language;
                ?>
                @foreach ($exp as $exps)
                    @if ($exps->language == $item->language)
                    <?php $percentage += intval($exps->points) ?>
                    @endif
                @endforeach
                <?php $percentage = $percentage / 2 ?>

            

                    <div class="badge {{ $percentage >= 100 ? '' : 'locked' }}">
                            <img src="/images/{{$item->picture}}" alt="Badge 5">
                            <h2>{{$item->language}}</h2>
                        <div class="percentage">
                            <p>{{ $percentage >= 100? '100' : $percentage  }}%</p>
                        </div>       
                    <?php $met = true ?>
                    @foreach ($claimed as $claimedBadge)
                        
                        @if ($claimedBadge->language == $item->language)
                    <button class="btns" onclick="showDetails('<?php echo $item->picture ?>', '<?php echo $item->language ?>')">View Details</button>
                            <?php $met = false; break; ?>
                         @endif
                       
                    @endforeach
                       @if ($met)
                    <button class="btns" onclick="claimBadge(<?php echo $percentage ?>, <?php echo $id ?>, '<?php echo  $language ?>')">Claim</button>
                       @endif
                    

                </div>
                

            @endforeach

        </div>
    </section>

    <script>
  function showDiv(divId, element) {
    // Hide all team-content divs
    var divs = document.querySelectorAll('.team-content');
    for (var i = 0; i < divs.length; i++) {
        divs[i].style.display = 'none';
    }

    // Show the selected div
    var selectedDiv = document.getElementById(divId);
    if (selectedDiv) {
        selectedDiv.style.display = 'grid';
    }

    // Remove 'active' class from all links
    document.querySelectorAll('.head ul li a').forEach(function(link) {
        link.classList.remove('active');
    });

    // Add 'active' class to the clicked link
    if (element) {
        element.classList.add('active');
    }
}
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/headermenu.js"></script>
    <script type="text/javascript" src="assets/js/claim.js"></script>


</body>

</html>