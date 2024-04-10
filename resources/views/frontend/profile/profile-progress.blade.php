<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>
    <link rel="stylesheet" href="assets/css/Progress.css">
    <link rel="shortcut icon" type="x-icon" href="assets/images/Logo.jpg">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            padding: 90px 10%;
            width: 100%;
            height: 100vh;
            background: url('assets/images/proressbg.svg') no-repeat center center fixed;
            background-size: cover;
            color: var(--text-color);
            overflow-x: hidden;
            /* Prevent horizontal scrolling */
            z-index: -1;
            /* Behind other content */
            background-size: cover;

        }
        .chartMenu {
        width: 60vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(54, 162, 235, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 56vw;
        height: calc(100vh - 40px);
        background:;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 350px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgb(5, 5, 5);
        background:;
        position: relative;
         background: radial-gradient(closest-side,
             rgba(255, 152, 152, 0.21) 89.11721110343933%,
             rgba(251, 25, 242, 0.03) 100%);
         border-radius: 10px;
         border-width: 1px;
         border-style: solid;
         border-image: linear-gradient(180deg,
             rgba(255, 220, 220, 1) 99.98999834060669%,
             rgba(254, 226, 226, 0) 100%);
         border-image-slice: 1;
         border: solid #333;
         width: 500px;
         height: 250px;
         position: relative;
         margin-top: 7px;
         margin-left: 100%;
         backdrop-filter: blur(6px);
         margin-bottom: 30%
       }    
        
      
    </style>



</head>

<body>

    <header>
        <a href="{{ route('profile') }}" class="bx bx-chevron-left" id="back-btn"></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">

            <ul class="profile">
                <button><a href="{{ route('profile') }}" class="profile-link">

                        @if (Auth::check() && Auth::user()->profile_photo)
                            <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : 'assets/images/avatar.png' }}"
                                alt="Profile Photo" class="avatar">
                        @else
                            <!-- Placeholder image or default avatar -->
                            <img src="assets/images/avatar.png" alt="Default Avatar" class="avatar">
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

        <div class="heading2">My Exp Progress</div>
        <div class="headline2">_____________</div>
        <div class="label1">MODULES</div>
        <p class="linelabel1">__________________________________________</p>
        <div class="percentage1">Modules experience gain is: </div>
        <div class="modula"></div>

        <div class="label2">EXERCISE</div>
        <p class="linelabel2">___________________________________________</p>
        <div class="percentage2">Exercise experience gain is: </div>
        <div class="exer"></div>

        <div class="label3">Quizzes</div>
        <p class="linelabel3">__________________________________________</p>
        <div class="percentage3">Quizzes experience gain is: </div>

        <div class="quiz"></div>



        {{-- <div class="rectangle-15">
            <p class="Experience">Progress Experience</p>
            <div class="gauge">
                <div class="progress">
                    <div class="bar"></div>
                    <div class="needle"></div>
                    <br>
                    <div class="percentage">0</div>

                </div>
                <p class="label"></p>
            </div> --}}

            <div class="chartCard">
                <div class="chartBox">
                  <canvas id="myChart"></canvas>
                  <div>
                  <div class="percentage">0</div>
                  <p class="label"></p>
                </div>

              </div>


    </section>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    
    <script type="text/javascript" src="assets/js/headermenu.js"></script>
    <script src="assets/js/Progress.js"></script>
    <script>
        //document.getElementById('menu-icon').addEventListener('click', function() {
           // document.querySelector('.navbar').classList.toggle('open');
        //});
        setTimeout(() => {
            updateexer({{ $exercisePoints }});
        }, 1000);
        setTimeout(() => {
            updatequiz({{ $quizPoints }});
        }, 1000);
        setTimeout(() => {
            updatePercentage({{ $quizPoints + $exercisePoints + $modulePoints}});
        }, 1000);

        // Example: Update modula after a certain time
        setTimeout(() => {
            updatemodula({{$modulePoints}});
        }, 1000);
    </script>

<script>
    // setup 
    const data = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'Weekly Sales',
        data: [250, 250, 250, 250, 250, 250, 250],
        backgroundColor: [
        
          'rgba(255, 165, 0, 1)'
        ],
        borderColor: [
          
          'rgba(0, 0, 0, 7)'
        ],
        borderWidth: 1.5,
        circumference:180,
        rotation:270,
        cutout: '80%',
        needleValue:''
      }]
    };

    const gaugeNeedle = {
        id: 'gaugeNeedle',
        afterDatasetsDraw (chart, args, plugins) {
            const { ctx, data } = chart;

            ctx.save();
            const xCenter = chart.getDatasetMeta(0).data[0].x;
            const yCenter = chart.getDatasetMeta(0).data[0].y;
            const outerRadius =  chart.getDatasetMeta(0).data[0].outerRadius;
            const innerRadius =  chart.getDatasetMeta(0).data[0].innerRadius;
            const widthSlice = (outerRadius - innerRadius) /2;
            const radius = 15;
            const angle = Math.PI / 100;

            const needleValue = data.datasets[0].needleValue;
            const dataTotal = data.datasets[0].data.reduce((a, b) => a + b, 0);
            const circumference =((chart.getDatasetMeta(0).data[0].circumference / Math.PI) / data.datasets[0].data[0]) * needleValue;


            ctx.translate(xCenter, yCenter);
            ctx.rotate(Math.PI * (circumference + 1.5))

            ctx.beginPath();
            ctx.strokeStyle = 'black';
            ctx.fillStyle = 'black';
            ctx.lineWidth = 1;
            ctx.moveTo(0 - radius, 0);
            ctx.lineTo(0, 0 -innerRadius - widthSlice);
            ctx.lineTo(0 + radius, 0);
            ctx.closePath();
            ctx.stroke();
            ctx.fill();
            


            //dot

            ctx.beginPath();
            ctx.arc(0,0, radius, 0, angle * 360, false)
            ctx.fill();
            ctx.restore();
        }
    }

    //gaugeFlowMeter Plugin block
    const gaugeFlowMeter = { id: 'gaugeFlowMeter', afterDatasetsDraw(chart, args, plugins){ const {ctx, data} = chart;

    ctx.save();
    const needleValue = data.datasets[0].needleValue;
    const xCenter = chart.getDatasetMeta(0).data[0].x;
    const yCenter = chart.getDatasetMeta(0).data[0].y;

    const circumference =((chart.getDatasetMeta(0).data[0].circumference / Math.PI) / data.datasets[0].data[0]) * needleValue;
    const percentageValue = circumference * 100;


        //flowMeter
            ctx.font = 'bold 20px sans-serif';
            ctx.fillStyle = 'black';
            ctx.textAlign = 'center';
            
            ctx.fillText(`${percentageValue.toFixed(1)}Exp`, xCenter, yCenter + 50);
            


        }   
    }
    


    //gaugeLabels plugins block
    const gaugeLabels ={
        id: 'gaugeLabels',
        afterDatasetsDraw(chart, args, plugins) {
            const { ctx, chartArea: {left, right} } = chart;
            const xCenter = chart.getDatasetMeta(0).data[0].x;
            const yCenter = chart.getDatasetMeta(0).data[0].y;

            const outerRadius =  chart.getDatasetMeta(0).data[0].outerRadius;
            const innerRadius =  chart.getDatasetMeta(0).data[0].innerRadius;
            const widthSlice = (outerRadius - innerRadius) /2;

            ctx.translate(xCenter, yCenter);
            ctx.font = 'bold 10px sans-serif';
            ctx.fillStyle = 'black';
            ctx.textAlign = 'center';
            ctx.fillText('',0 - innerRadius - widthSlice, 0 + 20);
            ctx.fillText('',0 + innerRadius + widthSlice,0 + 20);

            ctx.restore();
        }

    }


    // config 
    const config = {
      type: 'doughnut',
      data,
      options: {
        layout:{
            padding: {
                bottom:15
            }
        },
        aspectRatio:2,
        plugins:{
            legend:{
                display: false
            },
            tooltip:{
                enabled:false
            }
        }
      },
      plugins: [gaugeNeedle, gaugeFlowMeter, gaugeLabels]
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
    </script>

</body>

</html>
