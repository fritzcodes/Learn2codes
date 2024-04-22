<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">
    <link rel="stylesheet" href="assets/css/header.css">
    <title>Compiler | Learn2code</title>
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

body{
    overflow-x: hidden;
    width: 100%;
    height: 100vh;
    background: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background: linear-gradient(-45deg, #210535, #7b337d, #430d4b);
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

  header {    
    padding: 20px 2%;
    position: fixed;
    top:0;
    right: 0;
    width: 100%;
    height: 10vh;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: transparent;
    }

    header.sticky {
      background-color: var(--main-color);
    }
    
    #back-btn {
    color: var(--text-color);
    font-size: 60px;
    z-index: 10001;
    cursor: pointer;
    display: block;
    }
    
    .navbar a {
    color: var(--main-color);
    font-size: var(--p-head);
    font-weight: 500;
    padding: 4px 15px;
    border-radius: 4px;
    display: block;
    margin: 1.2rem 0;
    font-family: var(--font1);
    }
    
    .navbar a:hover {
    background: var(--second-color);
    color: var(--main-color);
    box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
    border-radius: 4px;
    transition: ease .2s;
    }
    
    .profile button{
    display: flex;
    justify-content: center; /* Aligns content horizontally */
    align-items: center; /* Aligns content vertically */
    border: none; /* Remove button border */
    background: none; /* Transparent background */
    cursor: pointer;
    padding: 0;
    }
    
    .profile-link {
    text-decoration: none;
    color: inherit; /* Use the parent element's text color */
    display: flex;
    flex-direction: column; /* Stack items vertically */
    align-items: center;
    }
    
    .profile button a h2 {
    word-wrap: break-word;
    word-break: break-all;
    margin: 0; /* Remove default margin */
    font-size: var(--p-head); /* Allows the username to take remaining space */
    }
    
    .avatar{
    width: 80px; /* Adjust the width as needed */
    height: 80px; /* Adjust the height as needed */
    border-radius: 50%; /* Makes the image round if needed */
    margin-bottom: 5px; 
    
    }
    
    #menu-icon {
    color: var(--text-color);
    font-size: 50px;
    z-index: 10001;
    cursor: pointer;
    display: block;
    }
    
    .logout-btn{
    margin-top: 20px;
    padding: 10px 10%;
    flex-shrink: 0;
    border-radius: 35.07px;
    background: #fa0404;
    }
    
    .logout-btn:hover{
    cursor: pointer;
    background: var(--main-color);
    box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
    }
    
    .logout-btn:active{
    color: var(--text-color);
    }
    
    .navbar {
    position: absolute;
    top: 0;
    right: -100%;
    width: 25%;
    height: 100vh;
    background-color: var(--bg-color);  
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px 0%;
    font-family: var(--font1);
    transition: 0.5s all;
    }
    
    .open {
    right: 0;
    }
    
    .list {
    width: 50%;
    margin-top: 100px;     
    }
    

    /*----------------IDE--*/
    iframe {
        position: relative;
        top: 10vh;
        padding: 30px;
        border-radius: 40px;
    }


    







    @media (max-width: 1300px) {
      header {
        padding: 17px 3%;
        transition: .2s;
      }
    
      :root {
        --h2-head: 2rem;
        --p-head: 1.5rem;
        transition: .2s;
      }
    
      }
    
    
    @media (max-width: 1024px) {
    
      #menu-icon {
        display: block;
      }
    
      .navbar {
        width: 45%;
      }
    
    }
    
    @media (max-width: 860px) {
      header {
        background-color: var(--main-color);
        box-shadow: 0 0 10px 2px var(--second-color); /* Tomato color */

      }

      #menu-icon {
        display: block;
      }

      :root {
        --h2-head: 1.5rem;
        --p-head: 1rem;
        transition: .2s;
      }

      iframe {
        padding: 0px;
        border-radius: 0px;
    }
    
    }
    
    @media (max-width: 540px) {
      :root {
        --h2-head: 1.1rem;
        --p-head: 0.8rem;
        transition: .2s;
      }
    
      .navbar {
        width: 70%;
    }
    
    }
    
    
    @media (max-width: 376px) {
    
      .open {
        right: 0;
    }
    
    }
    
    
    @media (max-width: 280px) {
        :root {
        --h2-head: 1rem;
        --p-head: 0.8rem;
        transition: .2s;
      }

      .profile button {
        margin-top: 40px;
    }

    }
    
    @media (min-height: 1024px) {
      .navbar {
        width: 50%
    }
    
    #back-btn, #menu-icon {
      font-size: 80px;
    }

    .profile button {
        margin-top: 100px;
    }
    
      :root {
        --h2-head: 2.5rem;
        --p-head: 1.5rem;
        transition: .2s;
    
    }
    
    }

    @media (min-height: 1300px) {
      #back-btn, #menu-icon {
        font-size: 100px;
      }

      .profile button {
        margin-top: 150px;
    }
      
        :root {
          --big-font: 5rem;
          --h2-font: 2.5rem;
          --p-font: 1.5rem;
          transition: .2s;
      
      }

      header {
        background-color: var(--main-color);
        box-shadow: 0 0 10px 2px var(--second-color); /* Tomato color */

      }
      
      }
</style>


</head>

<body>


    <iframe id="oc-editor" frameborder="" height="90%"
        src="https://onecompiler.com/embed?hideLanguageSelection=true&&hideNew=true&&hideNewFileOption=true&&listenToEvents=true&&codeChangeEvent=true&&hideTitle=true"
        width="100%">
    </iframe>

    <script>
        const header = document.querySelector("header");
        const menu = document.querySelector('#menu-icon');
        const navbar = document.querySelector('.navbar');
        const section = document.querySelector('section');

        // Adjust header class based on scroll position
        window.addEventListener("scroll", function() {
            header.classList.toggle("sticky", window.scrollY > 0);
        });

        // Global variable to track the hover state
        let isHoverEnabled = true;

        // Function to toggle hoverability
        function toggleHoverability() {
        section.classList.toggle('no-hover', !isHoverEnabled);
        }

        // Toggle menu, navbar, and menu icon on menu icon click
        menu.onclick = (event) => {
        event.stopPropagation(); // Prevent the click event from bubbling up to the document
        menu.classList.toggle('bx-x'); // Toggle icon shape between burger and X
        navbar.classList.toggle('open'); // Toggle visibility of the navbar
        isHoverEnabled = !isHoverEnabled; // Toggle hover state
        toggleHoverability();
        };

        // Close navbar and reset icon when clicking outside the header or menu
        document.addEventListener('click', function (event) {
        if (!header.contains(event.target) && event.target !== menu) {
            if (navbar.classList.contains('open')) {
            navbar.classList.remove('open'); // Close the navbar
            menu.classList.remove('bx-x'); // Ensure menu icon is back to burger
            isHoverEnabled = true; // Reset hover state
            toggleHoverability();
            }
        }
        });
    </script>
    
    <script>
        const programmingLanguages = [{
                id: 'java',
                name: 'Java',
                languageType: 'programming'
            },
            {
                id: 'python',
                name: 'Python',
                languageType: 'programming'
            },
            {
                id: 'c',
                name: 'C',
                languageType: 'programming'
            },
            {
                id: 'cpp',
                name: 'C++',
                languageType: 'programming'
            },
            {
                id: 'nodejs',
                name: 'NodeJS',
                languageType: 'programming'
            },
            {
                id: 'javascript',
                name: 'JavaScript',
                languageType: 'programming'
            },
            {
                id: 'groovy',
                name: 'Groovy',
                languageType: 'programming'
            },
            {
                id: 'jshell',
                name: 'JShell',
                languageType: 'programming'
            },
            {
                id: 'haskell',
                name: 'Haskell',
                languageType: 'programming'
            },
            {
                id: 'tcl',
                name: 'Tcl',
                languageType: 'programming'
            },
            {
                id: 'lua',
                name: 'Lua',
                languageType: 'programming'
            },
            {
                id: 'ada',
                name: 'Ada',
                languageType: 'programming'
            },
            {
                id: 'commonlisp',
                name: 'CommonLisp',
                languageType: 'programming'
            },
            {
                id: 'd',
                name: 'D',
                languageType: 'programming'
            },
            {
                id: 'elixir',
                name: 'Elixir',
                languageType: 'programming'
            },
            {
                id: 'erlang',
                name: 'Erlang',
                languageType: 'programming'
            },
            {
                id: 'fsharp',
                name: 'F#',
                languageType: 'programming'
            },
            {
                id: 'fortran',
                name: 'Fortran',
                languageType: 'programming'
            },
            {
                id: 'assembly',
                name: 'Assembly',
                languageType: 'programming'
            },
            {
                id: 'scala',
                name: 'Scala',
                languageType: 'programming'
            },
            {
                id: 'php',
                name: 'PHP',
                languageType: 'programming'
            },
            {
                id: 'python2',
                name: 'Python2',
                languageType: 'programming'
            },
            {
                id: 'csharp',
                name: 'C#',
                languageType: 'programming'
            },
            {
                id: 'perl',
                name: 'Perl',
                languageType: 'programming'
            },
            {
                id: 'ruby',
                name: 'Ruby',
                languageType: 'programming'
            },
            {
                id: 'go',
                name: 'Go',
                languageType: 'programming'
            },
            {
                id: 'r',
                name: 'R',
                languageType: 'programming'
            },
            {
                id: 'racket',
                name: 'Racket',
                languageType: 'programming'
            },
            {
                id: 'ocaml',
                name: 'OCaml',
                languageType: 'programming'
            },
            {
                id: 'vb',
                name: 'Visual Basic (VB.NET)',
                languageType: 'programming'
            },
            {
                id: 'bash',
                name: 'Bash',
                languageType: 'programming'
            },
            {
                id: 'clojure',
                name: 'Clojure',
                languageType: 'programming'
            },
            {
                id: 'typescript',
                name: 'TypeScript',
                languageType: 'programming'
            },
            {
                id: 'cobol',
                name: 'Cobol',
                languageType: 'programming'
            },
            {
                id: 'kotlin',
                name: 'Kotlin',
                languageType: 'programming'
            },
            {
                id: 'pascal',
                name: 'Pascal',
                languageType: 'programming'
            },
            {
                id: 'prolog',
                name: 'Prolog',
                languageType: 'programming'
            },
            {
                id: 'rust',
                name: 'Rust',
                languageType: 'programming'
            },
            {
                id: 'swift',
                name: 'Swift',
                languageType: 'programming'
            },
            {
                id: 'octave',
                name: 'Octave',
                languageType: 'programming'
            },
            {
                id: 'text',
                name: 'Text',
                languageType: 'programming'
            },
            {
                id: 'brainfk',
                name: 'BrainFK',
                languageType: 'programming'
            },
            {
                id: 'coffeescript',
                name: 'CoffeeScript',
                languageType: 'programming'
            },
            {
                id: 'ejs',
                name: 'EJS',
                languageType: 'programming'
            },
            {
                id: 'mysql',
                name: 'MySQL',
                languageType: 'database'
            },
            {
                id: 'postgresql',
                name: 'PostgreSQL',
                languageType: 'database'
            },
            {
                id: 'mongodb',
                name: 'MongoDB',
                languageType: 'database'
            },
            {
                id: 'sqlite',
                name: 'SQLite',
                languageType: 'database'
            },
            {
                id: 'redis',
                name: 'Redis',
                languageType: 'database'
            },
            {
                id: 'mariadb',
                name: 'MariaDB',
                languageType: 'database'
            },
            {
                id: 'sqlserver',
                name: 'Microsoft SQL Server',
                languageType: 'database'
            }
        ];
      
        var filename = "{!! $module->filename !!}";
        var trycode = `{!! htmlspecialchars_decode($module->trycode) !!}`;
        var language = `{!! htmlspecialchars_decode($module->language) !!}`;
        const filteredLanguage = programmingLanguages.filter(languages => languages.name.toUpperCase() === language.toUpperCase());
        var iFrame = document.getElementById('oc-editor');
        var title = document.getElementById('titleContent');
       console.log(filteredLanguage[0].name);
      
        // Wait for the iframe to finish loading
        iFrame.onload = function() {
            //title.textContent = filteredLanguage[0].name;
            // Send message to populate code
            title = filteredLanguage[0].name;
            iFrame.contentWindow.postMessage({
                eventType: 'populateCode',
                language: filteredLanguage[0].id,
                files: [{
                    "name": filename,
                    "content": trycode
                }]
            }, "*");
        };
    </script>
</body>

</html>
