<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Code Exercise | Learn2Code</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        *{
  padding: 0;
  margin: 0;
  list-style: none;
  box-sizing: border-box;
  text-decoration: none;
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

                body {
                    overflow-y: hidden;
                    width: 100%;
                    height: 100vh;
                    background: url("/assets/images/bg.svg");
                    margin: auto;
                    display: flex;
                    justify-content: center; /* Center horizontally */
                    align-items: center; /* Center vertically */
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
    

  .quiz-container {
    width: 80%;
    padding: 50px 30px;
    position: relative; 
    border-radius: 35.066px;
    background: var(--main-color);  
    background: radial-gradient(254.43% 143.73% at 6.62% 2.73%, rgba(255, 182, 72, 0.56) 0%, rgba(255, 182, 72, 0.56) 0%, rgba(255, 182, 72, 0.56) 0.01%, rgba(53, 0, 62, 0.08) 100%);
    box-shadow: 15px 18px 2px rgba(0, 0, 0, 0.5), -15px 18px 2px rgba(0, 0, 0, 0.6); 
    backdrop-filter: blur(3px);  
    z-index: 1;   
  }
  
  .title {
    font-family: var(--font1);
    position: relative;
    display: block;
  }

  .title h2 {
    padding: 10px 0;
    color: var(--bg-color);
    font-size: var(--h2-font);
  }
  
  #question-1 {
  padding: 5px 0;
  color: var(--text-color);
   font-family: var(--font2); /* Change 'YourChosenFont' to the desired font family */
   font-size: var(--p-font);
   text-align: left;
   font-weight: bold;
  
  }
  
  .code-container {
   margin: 10px 0;
   display: flex;
   justify-content: center;
   background-color: white; /* Set the background color for the code container */
   border: 1px solid var(--second-color);
   border-radius: 15px; /* Adjust the border radius as needed */
   padding: 30px; /* Adjust the padding as needed */
  
  }
  
  .code-container code {
   padding: 40px 0;
   font-family: var(--font2); /* Change the font for the code */
   font-size: var(--h2-font); /* Adjust the font size as needed */
   color: var(--bg-color);
   font-weight: bold;
   
  } 

  code input {
    max-width: 200px;
    padding: 5px 3px;
    margin: 5px;
    border-top: none;
    border-left: none;
    border-right: none;
    border-color: var(--bg-color);
    font-size: var(--h2-font);
    text-align: center;
    color: var(--text-color);
    font-weight: 600;
  }

  .btn {
    display: flex;
    justify-content: center;
  }

  .quesnum {
    display: flex;
    justify-content: start;
  }

  .quesnum p{
    font-size: var(--p-font);
    color: var(--main-color);
    font-family: var(--font2);
  }
  
  .btn button {
   background-color: var(--second-color);
   color: var(--main-color);
   padding: 5px 15px;
   border: none;
   border-radius: 5px;
   cursor: pointer;
   font-family: var(--font2);
   font-size: var(--h2-font);
   transition: background-color 0.3s ease;
   box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
  }
  
  .btn button:hover {
   background: var(--text-color);
  }

  #showScore .btn{
  justify-content: space-around;
  }

  #showScore .btn a{
    font-family: var(--font2);
    color: var(--main-color);
  }

  #try {
 background-color: green;
  }
  
  #quit {
 background-color: red;
  }



  #congratulations {
   display: none;
   width: 80%;
   padding: 50px 30px;
   position: relative; 
   border-radius: 35.066px;
   background: var(--main-color);  
   background: radial-gradient(254.43% 143.73% at 6.62% 2.73%, rgba(255, 182, 72, 0.56) 0%, rgba(255, 182, 72, 0.56) 0%, rgba(255, 182, 72, 0.56) 0.01%, rgba(53, 0, 62, 0.08) 100%);
   box-shadow: 15px 18px 2px rgba(0, 0, 0, 0.5), -15px 18px 2px rgba(0, 0, 0, 0.6); 
   backdrop-filter: blur(3px);  
   z-index: 1;   
  }
  
  #congratulations .title h2 {
    text-align: center;
    padding: 10px 0;
    color: var(--bg-color);
    font-size: var(--h2-font);
   color: lightgreen; /* Adjust the color as needed */
  
   
   /* Add any additional styles for the h2 element */
  }
  
  .correct-container {
    margin: 10px 0;
    display: flex;
    justify-content: center;
    background-color: white; /* Set the background color for the code container */
    border: 1px solid green;
    border-radius: 15px; /* Adjust the border radius as needed */
    padding: 30px; /* Adjust the padding as needed *//*/* Adjust margin as needed */
  }
  
  
  .correct-container code {
    display: flex;
    padding: 40px 0;
   font-family: var(--font1); /* Change the font for the code */
   font-size: var(--h2-font); /* Adjust the font size as needed */
   color: green; /* Set the color for the code */
   font-weight: bold;
  
  }
  
  
  #incorrect {
    display: none;
    width: 80%;
    padding: 50px 30px;
    position: relative; 
    border-radius: 35.066px;
    background: var(--main-color);  
    background: radial-gradient(254.43% 143.73% at 6.62% 2.73%, rgba(255, 182, 72, 0.56) 0%, rgba(255, 182, 72, 0.56) 0%, rgba(255, 182, 72, 0.56) 0.01%, rgba(53, 0, 62, 0.08) 100%);
    box-shadow: 15px 18px 2px rgba(0, 0, 0, 0.5), -15px 18px 2px rgba(0, 0, 0, 0.6); 
    backdrop-filter: blur(3px);  
    z-index: 1;  
  }
  
  
  #incorrect .title h2 {
    text-align: center;
    padding: 10px 0;
    color: var(--bg-color);
    font-size: var(--h2-font); 
    color: red; /* Adjust the color as needed */
  }


  .incorrect-ans {
    margin: 10px 0;
    display: flex;
    justify-content: center;
    background-color: white; /* Set the background color for the code container */
    border: 1px solid red;
    border-radius: 15px; /* Adjust the border radius as needed */
    padding: 30px; /* Adjust the padding as needed *//*/* Adjust margin as needed */
  }
  
  
  .incorrect-ans code {
    display: flex;
    padding: 40px 0;
    font-family: var(--font1); /* Change the font for the code */
    font-size: var(--h2-font); /* Adjust the font size as needed */
    color: red; /* Set the color for the code */
    font-weight: bold;
  
  }
  
  #showScore{
    display: none;
    width: 80%;
    padding: 50px 30px;
    position: relative; 
    border-radius: 35.066px;
    background: var(--main-color);  
    background: radial-gradient(254.43% 143.73% at 6.62% 2.73%, rgba(255, 182, 72, 0.56) 0%, rgba(255, 182, 72, 0.56) 0%, rgba(255, 182, 72, 0.56) 0.01%, rgba(53, 0, 62, 0.08) 100%);
    box-shadow: 15px 18px 2px rgba(0, 0, 0, 0.5), -15px 18px 2px rgba(0, 0, 0, 0.6); 
    backdrop-filter: blur(3px);  
    z-index: 1;  
   }
   
   #showScore .title h2 {
    text-align: center;
    padding: 10px 0;
    color: var(--bg-color);
    font-size: var(--h2-font);
   color: lightgreen; /* Adjust the color as needed */
  
   /* Add any additional styles for the h2 element */
  }

  .correct-containers {
    margin: 10px 0;
    display: flex;
    justify-content: center;
    border-radius: 15px; /* Adjust the border radius as needed */
    padding: 30px; /* Adjust the padding as needed *//*/* Adjust margin as needed */
  }

  .correct-containers p{
    font-family: var(--font1); /* Change the font for the code */  
  }
  
  
  .correct-containers code {
    display: inline-flex;
    padding: 40px 5px;
   font-family: var(--font1); /* Change the font for the code */
   font-size: var(--big-font); /* Adjust the font size as needed */
   color: var(--main-color); /* Set the color for the code */
   font-weight: bold;
  
  }




    @media (max-width: 1300px) {
        :root {
            --h2-head: 2rem;
            --p-head: 1.5rem;
            transition: .2s;
          }

    }

    @media (max-width: 1024px) {
        :root{ /*---font and color defaults --*/
            --h2-font: 1.5rem;
            --p-font: 1rem;
        }
    
            .quiz-container, #congratulations,
             #incorrect, #showScore {
                width: 85%;
            }
    


    }

    @media (max-width: 860px) {
        :root {
            --h2-head: 1.5rem;
            --p-head: 1rem;
            transition: .2s;
          }

        body {
            padding: 0;
        }

        .title {
            display: block;
            justify-content: center;
            text-align: left;
        }

        .quiz-container, #congratulations,
        #incorrect, #showScore {
          position: fixed;
           border-radius: 0;
           width: 100%;
           height: 100vh;
           align-content: center;
           overflow-y: scroll;
           
       }

       .code-container code, #congratulations code, #incorrect code {
        font-size: var(--p-font);
       }

       code input {
        max-width: 100px;
        padding: 2px 2px;
        margin: 5px;
        font-size: var(--p-font);
        text-align: left;
      }

       .quesnum {
        margin: 20px 0;
        justify-content: center;
       }

       .btn button {
   font-size: var(--p-font);
  }
     
  img {
    display: none;
  }

        }  



    @media (max-width: 540px) {
        :root{ /*---font and color defaults --*/
            --h2-font: 2.2rem;
            --p-font: 1.1rem;
        }

        .quiz-container, #congratulations,
        #incorrect, #showScore {
          padding: 0 10px;
           
       }


    }


    @media (max-width: 376px) {
        :root{ /*---font and color defaults --*/
            --h2-font: 2rem;
            --p-font: 1rem;
        }

    }


    @media (max-width: 280px) {
        :root{ /*---font and color defaults --*/
            --h2-font: 1.5rem;
            --p-font: .9rem;
        }


    }


    @media (min-height: 1024px) {
        :root {
            --h2-font: 2.5rem;
            --p-font: 1.5rem;
        }

        .title {
            display: block;
            justify-content: center;
            text-align: left;
        }

        .quiz-container, #congratulations,
        #incorrect, #showScore {
          position: fixed;
           border-radius: 0;
           width: 100%;
           height: 100vh;
           align-content: center;
           overflow-y: scroll;
           
       }

       .code-container code, #congratulations code, #incorrect code {
        font-size: var(--h2-font);
       }

       code input {
        max-width: 100px;
        padding: 2px 2px;
        margin: 5px;
        font-size: var(--h2-font);
        text-align: left;
      }

       .quesnum {
        margin: 20px 0;
        justify-content: center;
       }

       .btn button {
   font-size: var(--h2-font);
  }


    }

    @media (min-height: 1300px) {
        :root {
            --h2-font: 3rem;
            --p-font: 2rem;
        }


    }
    

    </style>
</head>

<body>
<header>
        <a href="/startmenu" class="bx bx-chevron-left" id="back-btn"></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">

            <ul class="profile">
                <button><a href="{{ route('profile') }}" class="profile-link">

                        @if (Auth::check() && Auth::user()->profile_photo)
                            <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : 'assets/images/avatar.png' }}"
                                alt="Profile Photo" class="avatar">
                        @else
                            <!-- Placeholder image or default avatar -->
                            <img src="/assets/images/avatar.png" alt="Default Avatar" class="avatar">
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

    @if (count($data) == 0)
    <script>
        Swal.fire({
            icon: 'warning',
            text: 'No Exercise Yet.',
            title: 'OOPS'
        }).then(function() {
            window.location.href = '/exercise/selectLanguage';
        })
    </script>
    @else
    <div class="quiz-container" id="quiz-container-1">
        <div class="title">
            <h2> {!! $data['0']->language !!} Exercise </h2>
            <p id="question-1">Insert the missing part to complete the code.</p>            
        </div>

            <div class="code-container">
                <code id="exerciseContent">{!! $data['0']->content !!}
                    {{-- public class MyClass {<br> 
    public static void main(String[] args) { 
      <span class="underline" id="underline1" data-answer="System" onclick="activateUnderline(this)"></span>.
      <span class="underline" id="underline2" data-answer="out" onclick="activateUnderline(this)"></span>.
      <span class="underline" id="underline3" data-answer="println" onclick="activateUnderline(this)"></span>("Hello World");
      
    } --}}
                </code>
            </div>
        <div class="btn">
        <button onclick="checkAnswers()">Submit</button>            
        </div>

        <div class="quesnum">
            <p><span id="itemNumber">1</span> of 10 Questions</p>
        </div>

    </div>


    <div id="congratulations">
        <img src="/assets/images/confe2.svg" alt="Left Image" style="position: absolute; left: 120px; top: 15%; transform: translateY(-50%); width: 120px;">
        <img src="/assets/images/confet.svg" alt="Right Image" style="position: absolute; right: 120px; top: 15%; transform: translateY(-50%); width: 120px;">
        <div class="title">
            <h2>CORRECT!</h2>            
        </div>
        <div class="correct-container">
            <p class="correct-answer"> 
                <code id="correctAns"></code>
            </p>
        </div>

        <div class="btn">
            <button class="next-btn submitBtn"> Next>> </button>
        </div>


    </div>



    <div id="incorrect">
        <img src="/assets/images/robo1.svg" alt="Right Image" style="position: absolute; right: 120px; top: 15%; transform: translateY(-50%); width: 100px;">
        <img src="/assets/images/robo2.svg" alt="Left Image" style="position: absolute; left: 120px; top: 15%; transform: translateY(-50%); width: 100px;">
        <div class="title">
            <h2>INCORRECT!</h2>            
        </div>
        <div class="incorrect-ans">
            <p class="incorrect-answer"> <code id="incorrectAns"> </code></p>
        </div>

        <div class="btn">
        <button class="skip-btn submitBtn" id="submitBtn"> Next>> </button>            
        </div>



    </div>



    <div id="showScore" style="display: none">
        <img src="/assets/images/confe2.svg" alt="Left Image" style="position: absolute; left: 125px; top: 20%; transform: translateY(-50%); width: 120px;">
        <img src="/assets/images/confet.svg" alt="Right Image" style="position: absolute; right: 125px; top: 20%; transform: translateY(-50%); width: 120px;">
        <div class="title">
            <h2>You Got</h2>            
        </div>
        <div class="correct-containers">
            <p class="correct-answers"><code id="scoreShow"></code>XP</p>
        </div>

        <div class="btn">
            <button class="next-btn submitBtns" id="try"><a href="">Try again</a></button>
            <button class="next-btn submitBtns" id="quit"><a href="/exercise/selectLanguage">Quit</a></button>
        </div>

    </div>

    <script src="/assets/js/Exercise.js"></script>
    <script>
        var score = 0;
        var answers = [];
        $("#correctAns").html( `{!! $data['0']->content !!} `);
        $("#incorrectAns").html( `{!! $data['0']->content !!} `);
        function underlineRel() {

            var fillInBlanks = document.querySelectorAll("#exerciseContent u");
            fillInBlanks.forEach(function(uTag, index) {

                var textBox = document.createElement("input");
                textBox.type = "text";

                textBox.setAttribute("data-index", index);
                textBox.value = ""; // Set the initial value of the textbox to an empty string
                uTag.parentNode.insertBefore(textBox, uTag);
                uTag.parentNode.removeChild(uTag); // Remove the <u> tag
                answers[index] = uTag.textContent;
            });

            var textBoxes = document.querySelectorAll("input[type='text']");
            textBoxes.forEach(function(textBox) {
                var index = parseInt(textBox.getAttribute("data-index"));
                textBox.addEventListener("input", function() {
                    userAnswers[index] = this.value;
                });
            });
        }
        underlineRel();

        function checkAnswers() {

            var correctAnswers = answers;
            var userAnswers = [];
            var textBoxes = document.querySelectorAll("input[type='text']");
            textBoxes.forEach(function(textBox) {
                var index = parseInt(textBox.getAttribute("data-index"));
                userAnswers[index] = textBox.value;
            });


            var errorCode = 0;
            for (var i = 0; i < correctAnswers.length; i++) {
                if (correctAnswers[i] != userAnswers[i]) {
                    errorCode++;
                }
            }
            if (errorCode > 0) {
                showIncorrect();
            } else {
                showCorrect();
                score++;
                console.log(score);
            }

            //alert("Your score: " + score + " out of " + correctAnswers.length);
        }


        document.addEventListener('DOMContentLoaded', function() {
            const url = window.location.href;
            const parts = url.split('/');
            const id = parts[parts.length - 1];
            const cat = parts[parts.length - 2];
            const activity = cat + ", " + id;
            var dataIndex = 0;
            var dataLength = {!!json_encode(count($data)) !!}; // Get the length of $data
            var data = {!!json_encode($data) !!};
            console.log(activity);
            var exerciseContent = document.getElementById('exerciseContent');
            var correctAns = document.getElementById('correctAns');
            var incorrectAns = document.getElementById('incorrectAns');
            var submitButton = document.getElementById('submitBtn');
            var incorrect = document.getElementById('incorrect');
            var showScore = document.getElementById('showScore');
            var correct = document.getElementById('congratulations');
            var scoreShow = document.getElementById('scoreShow');
            var quiz = document.getElementById('quiz-container-1');


            $('.submitBtn').click(function() {

                dataIndex++;
                $('#itemNumber').html(dataIndex + 1);

                if (dataIndex >= dataLength) {
                    showScore.style.display = "block";
                    incorrect.style.display = "none";
                    quiz.style.display = "none";
                    correct.style.display = "none";
                    answers = [];
                    scoreShow.innerHTML = score;
                    const csrfToken = $('meta[name="csrf-token"]').attr('content');
                    const formData = new FormData();

                    formData.append('activity', activity);
                    formData.append('language', id);
                    formData.append('points', score);


                    $.ajax({
                        url: '/exp',
                        method: 'POST',
                        data: formData,
                        dataType: 'json',
                        processData: false, // Important: Do not process FormData
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in the headers
                        },
                        success: function(data) {
                            console.log(data);
                        },
                        error: function(xhr) {
                            alert(xhr.responseText);
                        }
                    })

                } else {
                    exerciseContent.innerHTML = data[dataIndex].content;
                    correctAns.innerHTML = data[dataIndex].content;
                    incorrectAns.innerHTML = data[dataIndex].content;
                    console.log(data[dataIndex].content);
                    incorrect.style.display = "none";
                    quiz.style.display = "block";
                    correct.style.display = "none";
                    answers = [];
                }

                // Update content of exerciseContent


                underlineRel();


            })


        });
    </script>
    @endif

    <script type="text/javascript" src="/assets/js/headermenu.js"></script>


</body>

</html>