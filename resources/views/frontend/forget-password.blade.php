<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
           
            
            <div class="ms-auto me-auto mt-5" style="with: 500px">
                <div class="mt=5">
                    @if($errors->any())
                    <div class="col-12">
                        @foreach ($errors->all() as $error)
                         <div class="alert alert-danger">{{$error}}</div>
                        @endforeach    
                    </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                    @endif
                    
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                    @endif
                </div>

                <label>we will send a link to your email, use the link to reset password</label>

                    <form action="{{ route('forget.password.post') }}" method="POST">
                        @csrf
                     

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        
                       <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>
</body>
</html>