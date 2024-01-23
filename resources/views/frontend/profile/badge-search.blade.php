<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn2Code</title>
  <link rel="stylesheet" href="assets/css/landingBadges.css">
  

<link rel="stylesheet"
   href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
<!-- Add this in your HTML -->


</head>
<body>

<header>
  <a href="IndexBadges.html" class="bx bx-chevron-left" id="back-btn"></a>
  <div class="bx bx-menu" id="menu-icon"></div>
  <ul class="navbar open">
 
    <li class="profile"><button><img src="avatar.png" alt="Avatar" class="avatar"><h2>Garen Damacia</h2></button></li>
    <li><a href="#home">Home</a></li>
    <li><a href="#forums">Forums</a></li>
    <li><a href="#playground">Playground</a></li>
    <li><a href="#modules">Modules</a></li>
    <li><a href="#leaderboard">Leaderboard</a></li>
    <li><button class="login-btn">Login</button></li>
  

</header>

<body>
 <section class="space-background">
    <div id="left-pane">

       <label class="tab">
          <input type="radio" name="tabs" onclick="showTab('tab1')" checked> <span>All</span>
       </label>

       <label class="tab">

       <input type="radio" name="tabs" onclick="showTab('tab2')"> <span>Claimed</span>
       </label>

       <label class="tab">

        <input type="radio" name="tabs" onclick="showTab('tab3')"> <span>Not claimed</span>
       </label>

       <label class="tab">

      

     </div> 
     
<div id="tab-content">

	<div id="tab1" class="tab-content active">

	<div class="top-row">
    	   <div class="container1 image-container" id="box1"></div>
           <div class="container2 image-container" id="box2"></div>
           <div class="container3 image-container" id="box3"></div>
           <div class="container4 image-container" id="box4"></div>
        </div>

        <div class="bottom-row">

           <div class="container5 image-container" id="box5"></div>
           <div class="container6 image-container" id="box6"></div>
    
        </div>
	
</div>

<div id="tab2" class="tab-content">

     <div class="top-row">
         <div class="container1 image-container" id="box1"></div>
         <div class="container2 image-container" id="box2"></div>
         <div class="container3 image-container" id="box3"></div>
         <div class="container4 image-container" id="box4"></div>
     </div>
</div>

	
<div id="tab3" class="tab-content">

 <div class="bottom-row"> 

    <div class="container5 image-container" id="box5"></div>
    <div class="container6 image-container" id="box6"></div>

 </div>    

</div>
</div>        
</section>

<script src="assets/js/headermenu.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/fetchbadge.js"></script>

</body>
</html>