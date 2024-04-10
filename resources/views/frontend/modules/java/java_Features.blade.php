<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Java Home</title>
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

      <a target="_top" href="{{ route('JavaIntro') }}">Java Introduction</a>
      <a target="_top" href="{{ route('JavaInstall') }}">Java Installation</a>
      <a target="_top" href="{{ route('JavaSyntax') }}">Java Syntax</a>

    <br>
    <br>
    <h2>Java Methods</h2>
    <br>
    <a target="_top" href="{{ route('JavaFeatures') }}"class="active">JavaScript Features
    </a>
    <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_dis.html">Disadvantages of JavaScript
    </a>
    <br>
    <br>
    
    <h2>Variables and Data Types</h2>
    <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_bb.html">  The Building Blocks
    </a>
    <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_tfm.html">  The Functional Mechanism of JavaScript
    </a>
    <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_csmd.html"> Making Decisions
    </a>
    <a target="_top" href="E:\INSTALL\PROGRAM\htdocs\MODULES\system\java_Module\topics\java_teje.html"> The Engines of JavaScript Execution

    </a>
  </div>
    

      <div class="content">

        <div id="main">
      
          <h2>JavaScript Features
          </h2>
          <br>
          <br>
    
          <p><b> 1. LightWeight Scripting language.</p></b>
          <p>&#8594; JavaScript is a lightweight scripting language because it is made for data handling in the browser or the client side.</p>
    
      <br>
    
          <p><b> 2. Dynamic Typing.</p></b>
          <p>&#8594; JavaScript supports dynamic typing which means types of the variable are defined based on the stored value.</p>
    
          <br>
    
          <p><b> 3. Object-oriented programming support
    
    
          </p></b>
          <p>&#8594; Starting from ES6, the concept of class and OOP is better defined.
          </p>
    
    
          <br>
    
          <p><b> 4. Functional Style
    
    
          </p></b>
          <p>&#8594; You can write your JavaScript applications and run them on any platform or any browser without affecting the output of the Script.
          </p>
    
          <br>
    
          <p><b> 5. Platform Independent
          </p></b>
          <p>&#8594; JavaScript is a prototype-based scripting Language
    
    
          </p>
    
    
    
    
          <br>
    
          <p><b> 6. Interpreted Language
          </p></b>
          <p>&#8594; JavaScript is an interpreted language which means the script written inside JavaScript is processed line by line.
    
    
            
          </p>
    
    
          <br>
    
          <p><b> 7.Single-threaded
    
          </p></b>
          <p>&#8594; JavaScript doesn't support multi-threading, by default it is single-threaded, which means it can execute only a single task at a time but it provides some features using which you can implement parallel execution. They are Async processing and Web workers.
    
    
          </p>  
    
          <br>
    
          <p><b> 8. Async Processing
    
    
          </p></b>
          <p>&#8594; JavaScript supports Promise which enables asynchronous requests wherein a request is initiated and JavaScript doesn't have to wait for the response if a request takes time and may block the request processing also starting from ES8, Async functions are also supported in JavaScript, these functions don't execute one by one, rather they are processed parallelly which has a positive effect on the processing time, reducing it to a great extent.
    
    
          </p>  
        
        
        
        
          <br>
    
          <p><b> 9. Web Workers
    
          </p></b>
          <p>&#8594; Using Web workers you can run processes in background threads so that you can have parallel execution.
    
          </p>  
    
          
          <br>
    
          <p><b> 10. Client-Side Validation
    
    
          </p></b>
          <p>&#8594; This is a feature that is available in JavaScript since the beginning and is still widely used because every website has a form in which users enter values, and to make sure that users enter the correct value, we must put proper validations in place, both on the client side and on the server-side.
    
          </p>  
    
    
          <br>
    
          <p><b> 11. More control in the browser
    
    
    
          </p></b>
          <p>&#8594;Detecting browser type, name OS version, etc information of the client for analysis.</p>
          <p>&#8594; Extensive in-built library with many useful functions for validation, data type conversion, string operations, etc.</p>
          <p>&#8594; It is an object-centered language with Window Object being the most important object in JavaScript and it also supports Polymorphism.</p>
    
          </p>  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        </div>
      </div>
    </section>
    
    <script type="text/javascript" src="../assets/js/headermenu.js"></script>
    
    </body>
    </html>
    