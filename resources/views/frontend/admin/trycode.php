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
        var iFrame = document.getElementById('oc-editor');

        // Wait for the iframe to finish loading
        iFrame.onload = function() {
            // Send message to populate code
            iFrame.contentWindow.postMessage({
                eventType: 'populateCode',
                language: 'java',
                files: [{
                    "name": "main.java",
                    "content": `public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello,zz World!");
    }
}
`
                }]
            }, "*");
        };
    </script>
</body>

</html>


