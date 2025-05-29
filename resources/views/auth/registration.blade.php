<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <link rel="stylesheet" href="{{url('public/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
     <div class="container">
        <span style="color:yellow">{{$errors->first('email')}}<br></span>
        <span style="color:red">{{$errors->first('password')}}<br></span>
        <span style="color:red">{{$errors->first('confirm_password')}}<br></span>
        @include('message')
        <div class="wrapper">
            <div class="title">
                <span>Registration  Page</span>
            </div>
            <form action="{{url('registration_post')}}" method="POST">
                @csrf
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" value="{{old('name')}}" placeholder="Username" required name="name">
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" value="{{old('email')}}" placeholder="Email" required name="email">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" value="" placeholder="Password" required name="password">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" value="" placeholder="Confirm Password" required name="confirm_password">
                </div>
                <div class="row">
                    <select class="selectbox" name="is_role" required>
                        <option value="">Select Role</option>
                        <option {{ old('is_role')=='2' ? 'selected' : ''}} value="2">Super Admin</option>
                        <option {{ old('is_role')=='1' ? 'selected' : ''}} value="1">Admin</option>
                        <option {{ old('is_role')=='0' ? 'selected' : ''}} value="0">User</option>
                    </select>
                </div>
                <div class="pass"><a href="{{url('forgot')}}">Forgot Password</a></div>
                <div class="row button">
                    <input type="submit" value="Registration">
                </div>
                <div class="signup-link">Sign In? <a href="{{url('login')}}">Login</a></div>
                <div class="signup-link">Welcome Page? <a href="{{url('/')}}">Welcome Page</a></div>
            </form>
        </div>
    </div>
</body>
</html>