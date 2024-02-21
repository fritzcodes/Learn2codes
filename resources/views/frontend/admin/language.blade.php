<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<body>
    <form action="/admin/AddLanguage" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="language" id="language">
        <input type="file" name="picture" id="picture" accept="image/*, .svg">
        <input type="submit" value="Add">
    </form>
    <table>
        <tr>
            <th>Photo</th>
            <th>Language</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td><img src="/images/{{ $item->picture }}" height="100px" width="100px" alt=""></td>
                <td>{{ $item->language }}</td>
                <td><button onclick="update({{ $item->id }})">Update</button> <button
                        onclick="del({{ $item->id }})">Delete</button></td>
            </tr>
        @endforeach
    </table>
    @if (Session::has('message'))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown', // Define the show animation
                hideMethod: 'slideUp', // Define the hide animation
                timeOut: 5000
            };
            toastr.success("New Language Added!", 'Success')
        </script>
    @endif
    <script>
        function update(id){
            $.ajax({
                url: ''
            })
        }
        function del(id){
            
        }
    </script>
</body>

</html>
