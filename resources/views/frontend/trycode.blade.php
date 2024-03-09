<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <iframe id="oc-editor" frameborder="0" height="450px" src="https://onecompiler.com/embed?hideLanguageSelection=true&&hideNew=true&&hideNewFileOption=true&&listenToEvents=true&&codeChangeEvent=true" width="100%"></iframe>
        
    <script>
        
        var filename = "{!! $module->filename !!}";
        var trycode = `{!! htmlspecialchars_decode($module->trycode) !!}`;
        console.log(trycode);
        var iFrame = document.getElementById('oc-editor');

        // Wait for the iframe to finish loading
        iFrame.onload = function() {
            // Send message to populate code
            iFrame.contentWindow.postMessage({
                eventType: 'populateCode',
                language: 'java',
                files: [{
                    "name": filename,
                    "content": trycode
                }]
            }, "*");
        };
    </script>
</body>

</html>


