<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/aboutus.css">
    <link rel="stylesheet" type="text/css" href="assets/css/layout.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
    <title>About Us</title>
</head>

<body style="background-image: url(assets/images/backg.svg)">


    <h2 id="title" style="color:white; text-align:center;">Meet Our Team</h2>

    <div class="tab-container">
        <button class="tab" onclick="showTab('list1')">Leaders</button>
        <button class="tab" onclick="showTab('list2')">Developers</button>
        <button class="tab" onclick="showTab('list3')">Researchers</button>
        <button class="tab" onclick="showTab('list4')">All</button>
    </div>

    <div id="list1" class="tab-content">
        <div class="column">
            <div class="card">
                <img src="assets/images/fritz.svg" alt="Jane" style="width:100%">
                <div class="container">
                    <h2>Fritz Retiza</h2>
                    <p class="title">Head Programmer</p>
                    <p>fritz@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>


    <div id="list2" class="tab-content">
        <div class="column">
            <div class="card">
                <img src="assets/images/fritz.svg" alt="Jane" style="width:100%">
                <div class="container">
                    <h2>Fritz Retiza</h2>
                    <p class="title">Head Programmer</p>
                    <p>fritz@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="assets/images/jehu.svg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>Jehu Isaiah Famor</h2>
                    <p class="title">Programmer</p>
                    <p>jehu@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="assets/images/david.svg" alt="John" style="width:100%">
                <div class="container">
                    <h2>David Matthew Borromeo</h2>
                    <p class="title">Programmer</p>
                    <p>david@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="assets/images/aedus.svg" alt="John" style="width:100%">
                <div class="container">
                    <h2>Mark Obrero</h2>
                    <p class="title">Programmer</p>
                    <p>mark@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showTab(tabId) {
            // Hide all tab content
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => {
                content.style.display = 'none';
            });

            // Deactivate all tabs
            const tabs = document.querySelectorAll('.tab');
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            // Show the selected tab content
            document.getElementById(tabId).style.display = 'block';

            // Activate the clicked tab
            const activeTab = document.querySelector(`[onclick="showTab('${tabId}')"]`);
            activeTab.classList.add('active');
        }
    </script>

</body>

</html>
