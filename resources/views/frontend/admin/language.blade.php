<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/admin/AddLanguage" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="language" id="language">
        <input type="file" name="picture" id="picture" accept="image/*">
        <input type="submit" value="Add">
    </form>

</body>

</html>