<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<body>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form method="post" action="/admin/addExercise">
        @csrf
       
        Language
        <select name="language" id="">
            <option value="">--Select a Language--</option>
            @foreach ($data as $item)
                <option value="{{ $item->language }}">{{ $item->language }}</option>
            @endforeach
        </select>
        <div style="width: 1000px">
            <textarea id="summernote" name="content"></textarea>
        </div>
       
        <input type="submit" value="Add exercise">
    </form>

    <table>
        <tr>
            <th>Language</th>
            <th>Action</th>
        </tr>

        @foreach ($data as $item)
            <tr>
                <td>{{ $item->language }}</td>
                <td><a href="/admin/languageModule/{{ $item->language }}"><button>View</button></a></td>
            </tr>
        @endforeach


    </table>

    {{-- <p id="exerciseContent">System.<u>out.println</u>("Hello World<u>");</u></p>
    <button onclick="checkAnswers()">Check Answers</button>

    <script>
        var answers = [];
        window.onload = function() {
            
            var fillInBlanks = document.querySelectorAll("u");
            fillInBlanks.forEach(function(uTag, index) {
                var textBox = document.createElement("input");
                textBox.type = "text";
                textBox.placeholder = "Fill in the blank";
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
        };

        function checkAnswers() {
            
            var correctAnswers = answers;
            var userAnswers = [];

            var textBoxes = document.querySelectorAll("input[type='text']");
            textBoxes.forEach(function(textBox) {
                var index = parseInt(textBox.getAttribute("data-index"));
                userAnswers[index] = textBox.value;
            });

            var score = 0;
            for (var i = 0; i < correctAnswers.length; i++) {
                if (correctAnswers[i] === userAnswers[i]) {
                    score++;
                }
            }
            alert("Your score: " + score + " out of " + correctAnswers.length);
        }
    </script> --}}
<script>
     $('#summernote').summernote({
            placeholder: 'Add codes here...',
            tabsize: 2,
            height: 100,
            toolbar: [
                ['style', ['underline']],
            ],
           
        });
</script>
</body>

</html>
