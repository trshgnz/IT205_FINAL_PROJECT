<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Glitzy Hoopz - Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')  }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Open Sans', sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding-top: 50px;
        }

        .login-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-form img {
            max-width: 350px;
            margin-bottom: 20px;
        }

        .login-form h2 {
            margin-bottom: -20px;
            font-size: 50px;
            font-family: 'Satisfy', cursive;
            color: #FF99CD;
        }

        .login-form label {
            font-weight: 600;
            color: black;
            display: block;
            text-align: left;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            border-radius: 20px;
            border: 1px solid #ced4da;
            padding: 12px;
            margin-bottom: 20px;
            width: 100%;
        }

        .login-form button[type="submit"] {
            background-color: #FF99CD;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 20px;
            cursor: pointer;
            width: 100%;
        }

        .login-form button[type="submit"]:hover {
            background-color: #FF99CD;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-form">
  
             <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                @csrf
                <img src="{{ asset('img/logo.png') }}" alt="Logo">       
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-block">Login</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
