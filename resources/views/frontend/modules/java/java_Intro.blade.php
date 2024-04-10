<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Java Intro</title>
  <link rel="stylesheet" href="../assets/css/java_Module.css">

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
    padding: 90px 5%;
    width: 100%;
    height: 100vh;
    background: url("../assets/images/backmenu.svg");
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

    <header>
        <a href="moduleLanguage" class="bx bx-chevron-left" id="back-btn"></a>
        <div class="bx bx-menu" id="menu-icon"></div>
    
        <ul class="navbar">
    
            <ul class="profile">
                <button><a href="{{ route('profile') }}" class="profile-link">
    
                        @if (Auth::check() && Auth::user()->profile_photo)
                            <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : '../assets/images/avatar.png' }}"
                                alt="Profile Photo" class="avatar">
                        @else
                            <!-- Placeholder image or default avatar -->
                            <img src="../assets/images/avatar.png" alt="Default Avatar" class="avatar">
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

<section class="space-background">


    <div class="sidenav">
        <h2>Java Tutorial</h2>
        <br>
        <a target="_top" href="{{ route('JavaDefault') }}">Learn Java</a>
        <a target="_top" href="{{ route('JavaIntro') }}">Java Introduction</a>
        <a target="_top" href="{{ route('JavaInstall') }}"class="active">Java Installation</a>
        <a target="_top" href="{{ route('JavaSyntax') }}">Java Syntax</a>

    <br>
    <br>
    <h2>Java Methods</h2>
    <br>
    <a target="_top" href="{{ route('JavaFeatures') }}">JavaScript Features
    </a>
    <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_dis.html">Disadvantages of JavaScript
    </a>
    <br>
    <br>
    <h2>Variables and Data Types</h2>
    <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_bb.html">  The Building Blocks
    </a>
    <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_bb.html">  The Functional Mechanism of JavaScript
    </a>
    <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_csmd.html"> Making Decisions
    </a>
    <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_teje.html"> The Engines of JavaScript Execution

    </a>
  </div>


  <div class="content">

    <div id="main">
  
      <h2>JavaScript Syntax and Fundamentals
      </h2>
      <br>
      <p>
        <b>JavaScript</b> is a high-level, versatile, and dynamically-typed programming language primarily known for its role in web development. Initially created to enable client-side interactivity in web browsers, JavaScript has evolved to become a multi-paradigm language that can be used for both front-end and back-end development. 
        <br><br>It allows developers to create dynamic content, handle events, and interact with users in web applications.
        
        It allows developers to create features like pop-up messages, interactive forms, and responsive elements that enhance the user experience on websites. JavaScript is an essential tool for web developers, enabling them to bring websites to life by adding functionality and interactivity.
        
        JavaScript is commonly used in conjunction with HTML and CSS to build interactive and responsive user interfaces. With the advent of server-side frameworks like Node.js, JavaScript can now also be used for server-side scripting, enabling developers to build full-stack applications using a single language.

        <br>
        <br>
        
        Due to its widespread support in web browsers, JavaScript has become an essential technology for creating dynamic and engaging websites. Additionally, it has a large ecosystem of libraries and frameworks, such as React, Angular, and Vue.js, that further enhance its capabilities for building modern web applications.
        </p>

        
<br>


<p><b>Code: </b>
<br>
<br>
  <div class="code-container">
    <pre>
      <code>
        console.log("Welcome to JavaScript Modules!");
      </code>
    </pre>
  </div>
<br>
<p><b>Input: </b>
  <br>
  

<div class="photo-container">
  <img src="../assets/images/java_cs.png" alt="Derived Data types in C++ are created by extending the existing data types provided by the language. These derived data types include arrays, pointers, structures, and classes.
  ">
</div>
<br>


<p><b>Ouput: </b>
  <br>


  <div class="photo-container">
    <img src="../assets/images/java_os.png" alt="Derived Data types in C++ are created by extending the existing data types provided by the language. These derived data types include arrays, pointers, structures, and classes.
    ">
  </div>
  <p><b>Welcome to JavaScript Modules!
  </b>
</p>
<br><br><br>

<p><b>Explanation:
</b>
</p>

<p> 
<ul>
  
 <b> 1. console.log:<br> </b>
 <p>-console.log is a built-in function in JavaScript used for printing messages or values to the console.<br>
    -It's a tool developers use for debugging and displaying information during the execution of a script.<br>
</p>

<br>
<br>


<p><b>2. String Literal:</b><br>
- "Welcome to JavaScript Modules!" is a string literal.<br>
- A string is a sequence of characters, and in this case, it represents the message we want to display.<br>
- String literals are enclosed in double quotes (" ").<br>  
</p>



<br><br>



<p><b>3. Code Execution:</b><br>
  - When this script is run, the JavaScript engine encounters the console.log statement.<br>
  - It then prints the specified string to the console..<br>
  - String literals are enclosed in double quotes (" ").<br>  
  </p>

  <br><br>



  <p><b>4. Console Output:</b><br>
    - The final output, when you run this script, will be the message "Welcome to JavaScript Modules!" displayed in the console.
    <br>
    </p>
  





    </div>
  </div>
</section>

<script type="text/javascript" src="../assets/js/headermenu.js"></script>

</body>
</html>
  