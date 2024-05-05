<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Learn2Code E-Certificate</title>
    <link rel="stylesheet" href="../assets/css/cert.css">
    <link rel="shortcut icon" type="x-icon" href="../assets/images/logo.svg">

</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<body>
    <div class="container" style="padding:38.5px">
        <div class="border" style="margin-right:20px">
            <div class="marquee">
                <div class="logo">
                    <img src="../assets/images/qcu.svg" alt=""> <img src="../assets/images/Logo.svg" alt="">
                </div>

                <h1>Certificate of Completion</h1>
            </div>

            <div class="assignment">
                <p>This certificate is presented to</p>
            </div>

            <div class="person">
                <h2>David Matthew Borromeo</h2>
            </div>

            <div class="reason">
                <p>
                    have been successfully completed the Learn2Code Java language,
                    and hereby awarded this certificate of completion. This acknowledgement
                    is conferred on January 20, 2024.
                </p>

            </div>
        </div>

    </div>
    <script>
        function toPDF() {
            const element = document.querySelector('.container');

            const options = {
                filename: 'certificate.pdf',
                jsPDF: {
                    unit: 'px',
                    format: 'a4',
                    orientation: 'landscape'
                },
                html2canvas: {
                    scale: 2
                },
            };

            const tempContainer = document.createElement('div');
            tempContainer.appendChild(element.cloneNode(true));

            html2pdf()
                .from(tempContainer)
                .set(options)
                .save();
        }
    </script>
    <button onclick="toPDF()">To PDF</button>
</body>

</html>