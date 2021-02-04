<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revibook - Register Page</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/login_register/css/login.css')}}">
</head>
<body>
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
        <div class="card my-5 mx-2 mx-auto login-card" style="width:100%; height:85%;">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="{{asset('/login_register/images/login.jpg')}}" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <h1 class="font-weight-bold">Revibook</h1>
                        </div>
                        <p class="login-card-description">Create New Account</p>
                        <form role="form" action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username" class="sr-only">Username</label>
                                <input type="username" name="username" id="username" class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" placeholder="Username" value="{{old('username')}}">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email address" value="{{old('email')}}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password_confirmation" class="sr-only">Password Confirmation</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" placeholder="Password Confirmation">
                                @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <input name="register" id="register" class="btn btn-block login-btn mb-4" type="submit" value="Register">
                        </form>
                        {{--                        <a href="#" class="forgot-password-link">Forgot password?</a>--}}
                        <p class="login-card-footer-text">Already have an account? <a href="/login" class="text-reset">Sign in here</a></p>
                        <nav class="login-card-footer-nav">
                            <p>&copy;2021 Revibook All Rights Reserved</p>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
