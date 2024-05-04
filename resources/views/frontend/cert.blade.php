<!DOCTYPE html>
<html>
<head>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            /* Set body to A4 size */
            width: 96.5%; /* A4 width */
            height: 95%; /* A4 height */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        body {
            color: black;
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
        }
        .container {
            border: 20px solid tan;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .logo {
            color: tan;
        }
        .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
        }
        .assignment {
            margin: 20px;
        }
        .person {
            border-bottom: 2px solid black;
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 400px;
        }
        .reason {
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <br><br>
        <div class="logo">
            An Organization
        </div>

        <div class="marquee">
            Certificate of Completion
        </div>

        <div class="assignment">
            This certificate is presented to
        </div>

        <div class="person">
            Joe Nathan
        </div>

        <div class="reason">
            For deftly defying the laws of gravity<br/>
            and flying high
        </div>
    </div>
</body>
</html>
