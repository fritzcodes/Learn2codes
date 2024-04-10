<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.jpg">
    <title>Compiler | Learn2code</title>
</head>

<body>
    <center><h1 style="font-family:'Helvetica', Arial, serif" id="titleContent"></h1></center>
    <iframe id="oc-editor" frameborder="0" height="450px"
        src="https://onecompiler.com/embed?hideLanguageSelection=true&&hideNew=true&&hideNewFileOption=true&&listenToEvents=true&&codeChangeEvent=true&&hideTitle=true"
        width="100%"></iframe>
    
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
       
      
        // Wait for the iframe to finish loading
        iFrame.onload = function() {
            title.textContent = filteredLanguage[0].name;
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
