<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Learn2Code E-Certificate</title>
    <link rel="stylesheet" href="../assets/css/cert.css">
    <link rel="shortcut icon" type="x-icon" href="../assets/images/logo.svg">
    
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="border">
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
                <h2>{{ $fullname }}</h2>
            </div>

            <div class="reason">
                <p>
                    have been successfully completed the Learn2Code {{ $data->language }} language,
                    and hereby awarded this certificate of completion. This acknowledgement
                    is conferred on {{ date('F d, Y', strtotime($data->created_at)) }}.
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
                    unit: 'em',
                    format: [65.9, 39],  // width x height in pixels for A4 landscape
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
    <button onclick="toPDF()">Download<i class='bx bxs-file-pdf'></i></button>
</body>

</html>