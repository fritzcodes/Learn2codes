<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>
    <link rel="stylesheet" href="../assets/css/Admin.css">
    <link rel="stylesheet" href="../assets/css/userModal.css">
    <link rel="shortcut icon" type="x-icon" href="/assets/images/Logo.svg">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <div class="main-content"> <!---------------------- manage users -->
        <div class="table">
            <div class="tablebg">
                <div class="heading">
                    <h2>All Users</h2>
                    <input class="search" placeholder="Search" id="search" onkeyup="search()">
                </div>
                <table class="manage-user">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Record</td>
                            <td>Date</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $record)
                            <tr onclick="kahitano('{{ $record->category }}')">
                                <td>{{$record->id}}</td>
                                <td>Admin {{$record->admin->username . ' ' . $record->action . ' #' . $record->category_id . ' in ' . $record->category}} </td>
                                <td>{{$date = date("F d, Y | H:i A", strtotime($record->created_at)) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            function kahitano(id){
                if(id == "Module"){
                    window.location.href = '/admin/addModule';
                }else if(id == "Exercise"){
                    window.location.href = '/admin/exercise';
                }else if(id == "Quiz"){
                    window.location.href = '/admin/question';
                }
                
            }
        </script>
</body>
</html>