<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('admin_login/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_login/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_login/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_login/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admin_login/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

 
    {{-- <link href="{{asset('admin_login/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all"> --}}
    <link href="{{asset('admin_login/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_login/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_login/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_login/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_login/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_login/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('admin_login/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{asset('admin_login/images/icon/logo.png')}}" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{route('admin.reg')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" value="{{old('username')}}" placeholder="Username">
                                    @error('username')
                                       <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" value="{{old('email')}}" placeholder="Email">
                                    @error('email')
                                       <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" value="{{old('password')}}" placeholder="Password">
                                    @error('password')
                                       <p class="text-danger">{{$message}}</p> 
                                    @enderror
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{route('admin')}}">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('admin_login/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('admin_login/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('admin_login/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('admin_login/vendor/slick/slick.min.js')}}"></script>
    <script src="{{asset('admin_login/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('admin_login/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('admin_login/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{asset('admin_login/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admin_login/vendor/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('admin_login/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('admin_login/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('admin_login/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin_login/vendor/select2/select2.min.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('admin_login/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->