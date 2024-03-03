<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 4</title>
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


<style>
    body{
        background-color: rgb(255, 174, 22);
    }
</style>



<body>
    @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @endif

    <form method="post" action="/admin/updateModule">
        @csrf
        <input type="hidden" name="id" value="{{$modules->id}}">
        Title
        <input type="text" name="title" id="" value="{{$modules->title}}">

        Language
        <input type="text" value="{{$modules->language}}" name="language" readonly>
        <div style="width: 1000px">
            <textarea id="summernote" name="content">{{$modules->content}}</textarea>
        </div>
        Example Code:
        <textarea name="trycode" cols="50" rows="10">{{$modules->trycode}}</textarea>
        <input type="submit" value="Update">
    </form>

  

    <script>
        // Initialize Summernote with customized toolbar
        // Initialize Summernote with customized toolbar
        $('#summernote').summernote({
            placeholder: 'Add Module Here...',
            tabsize: 2,
            height: 100,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']], // Add font size dropdown to the toolbar
                ['fontname', ['fontname']], // Add font family dropdown to the toolbar
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'table']], // Add 'table' option to the 'insert' group
                ['view', ['fullscreen', 'codeview']]
            ],
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma',
                'Times New Roman', 'Verdana'
            ]
        });
    </script>
</body>

</html>