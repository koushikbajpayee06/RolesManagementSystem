<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="{{url('public/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Welcome Page</span>
            </div>
            <form action="">
                <div class="signin-link">
                    Sign In? <a href="{{url('login')}}"> Login</a>
                </div>
                <div class="signin-link">
                    Join Now? <a href="{{url('registration')}}"> Registration</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
