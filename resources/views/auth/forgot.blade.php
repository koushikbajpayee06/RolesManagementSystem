<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{url('public/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
     <div class="container">
        @include('message')  <div class="wrapper">
            <div class="title">
                <span>Forgot Password</span>
            </div>
            <form action="">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" value="" placeholder="Email" required name="email">
                </div> 
                 <div class="pass"><a href="{{url('login')}}">Login</a></div>            
                <div class="row button">
                    <input type="submit" value="Forgot Password">
                </div>
                <div class="signup-link">Join Now? <a href="{{url('registration')}}">Registration</a></div>
                <div class="signup-link">Welcome Page? <a href="{{url('/')}}">Welcome Page</a></div>
            </form>
        </div>
    </div>
</body>
</html>