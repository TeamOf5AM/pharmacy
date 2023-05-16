<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <meta property="og:image" content="{{ asset('pharmacy-new.jpg') }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Pharmacy Software solution is built to manage overall pharmacy business activities including medicine management, purchase management, supplier or manufacturers management, stock management, sales management, daily or monthly accounts management. Most importantly follow up the low stock medicine manage purchase from manufacturers, manage the customers and manufacturers due payment. This software is easy to use and manage with easy medicine search, easy invoice creation, pharmacy faster daily operation and date wise details report.">
    <meta name="keywords" content="Complete Pharmacy Software Solutions, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{ config('app.name', 'ATL Pharma') }}</title>
    <link rel="apple-touch-icon" href="{{ asset('dashboard/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon-plus.jpg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/themes/semi-dark-layout.css' ) }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard/app-assets/css/core/menu/menu-types/vertical-menu.css' ) }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard/app-assets/css/plugins/forms/form-validation.css' ) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/pages/authentication.css') }}">
    <!-- END: Page CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
    <style>
        html body p {
            color: #fff !important;
        }

        .dark-layout h2 {
            color: #fff !important;
        }

        .dark-layout body {
            background: linear-gradient(90deg, #C7C5F4, #776BCC) !important;
        }

        .dark-layout label {
            color: #fff !important;
        }

        .dark-layout .input-group .input-group-text {
            background-color: #fff !important;
        }

        .dark-layout .form-check-input:not(:checked) {
            background-color: #fff !important;
        }

        input.form-control {
            color: #000000 !important;
        }

        .dark-layout .btn.btn-dark {
            background-color: #161d31 !important;
        }

        .dark-layout .auth-wrapper .auth-bg {
            background: linear-gradient(90deg, #5D54A4, #7C78B8) !important;
            position: relative;
            height: 600px;
            width: 360px;
            box-shadow: 0px 0px 24px #5C5696;
        }

        form .error:not(input) {
            color: #ff0002;
        }





        .screen {
            background: linear-gradient(90deg, #5D54A4, #7C78B8);
            position: relative;
            height: 600px;
            width: 360px;
            box-shadow: 0px 0px 24px #5C5696;
        }

        .screen__content {
            z-index: 1;
            position: relative;
            height: 100%;
        }

        .screen__background {
            position: absolute;
            overflow: hidden !important;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }

        .screen__background__shape {
            transform: rotate(45deg);
            position: absolute;
        }

        .screen__background__shape1 {
            height: 520px;
            width: 520px;
            background: #FFF;
            top: -50px;
            right: 120px;
            border-radius: 0 72px 0 0;
        }

        .screen__background__shape2 {
            height: 220px;
            width: 220px;
            background: #6C63AC;
            top: -172px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape3 {
            height: 540px;
            width: 190px;
            background: linear-gradient(270deg, #5D54A4, #6A679E);
            top: -24px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape4 {
            height: 400px;
            width: 200px;
            background: #7E7BB9;
            top: 420px;
            right: 50px;
            border-radius: 60px;
        }

        .login {
            width: 320px;
            padding: 30px;
            padding-top: 156px;
        }

        .login__field {
            padding: 20px 0px;
            position: relative;
        }

        .login__icon {
            position: absolute;
            top: 30px;
            color: #7875B5;
        }

        .login__input {
            border: none;
            border-bottom: 2px solid #D1D1D4;
            background: none;
            padding: 10px;
            padding-left: 24px;
            font-weight: 700;
            width: 75%;
            transition: .2s;
        }

        .login__input:active,
        .login__input:focus,
        .login__input:hover {
            outline: none;
            border-bottom-color: #6A679E;
        }

        .login__submit {
            background: #fff;
            font-size: 14px;
            margin-top: 30px;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #D4D3E8;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            align-items: center;
            width: 100%;
            color: #4C489D;
            box-shadow: 0px 2px 2px #5C5696;
            cursor: pointer;
            transition: .2s;
        }

        .login__submit:active,
        .login__submit:focus,
        .login__submit:hover {
            border-color: #6A679E;
            outline: none;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->








    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Login-->
                        <div class="d-flex col-lg-4 mx-auto align-items-center px-2 p-lg-5 ">
                            <div class="screen">
                                <div class="screen__content">
                                    <form class="login" id="login-form" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <img src="https://squareitservice.com/psofttest/psoft/ppp/psoftlogo.png" width="120">
                                        <div class="login__field">
                                            <i class="login__icon fas fa-user"></i>
                                            <input type="email" id="email" class="login__input @error('email') is-invalid @enderror" name="email"
                                            placeholder="Enter your email" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus >
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="login__field">
                                            <i class="login__icon fas fa-lock"></i>
                                            <!-- <i class="fas fa-eye" data-feather="eye"></i> -->
                                            <input type="password" id="password" class="login__input @error('password') is-invalid @enderror" placeholder="Password"
                                                name="password" required>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <div class="form-check">
                                                <input class="form-check-input text-dark" type="checkbox" id="remember"
                                                    name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                                <label class="form-check-label" for="remember-me" style="color:black !important;"> {{ translate('Remember
                                                    Me') }} </label>
                                            </div>
                                        </div>
                                        <button class="button login__submit">
                                            <span class="button__text">{{ translate('Sign in')}}</span>
                                            <i class="button__icon fas fa-chevron-right"></i>
                                        </button>
                                    </form>
                                    <h3 style="position:absolute;bottom:0px;left:80px;">
                                        <!--<a style="color:#fff;font-size:16px;" href="#forgotPasswordModal" data-toggle="modal" data-target="#forgotPasswordModal" title="Forgot Password?" class="text-danger">
                                Forgot Password?            </a>-->
                                        <p style="color:#fff;font-size:14px;text-align:center">© <a
                                                style="color:#fff;font-size:14px;" href="#">SQUARE IT SERVICES</a>, v3.0
                                        </p>
                                    </h3>


                                </div>
                                <div class="screen__background" sty>
                                    <span class="screen__background__shape screen__background__shape4"></span>
                                    <span class="screen__background__shape screen__background__shape3"></span>
                                    <span class="screen__background__shape screen__background__shape2"></span>
                                    <span class="screen__background__shape screen__background__shape1"></span>
                                </div>
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('dashboard/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('dashboard/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('dashboard/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('dashboard/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('dashboard/app-assets/js/scripts/pages/auth-login.js') }}"></script>
    <!-- END: Page JS-->
    <script type="text/javascript">
        function autoFill() {
            $('#email').val('admin@ayaantec.com');
            $('#password').val('123456');
        }
        function autoFill2() {
            $('#email').val('doctor@gmail.com');
            $('#password').val('12345678');
        }
        function autoFill3() {
            $('#email').val('salem@gmail.com');
            $('#password').val('12345678');
        }
    </script>

</body>
<!-- END: Body-->

</html>