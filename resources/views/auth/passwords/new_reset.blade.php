<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Aero Bootstrap4 Admin :: Sign Up</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('back/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('back/css/style.min.css') }}">
</head>


<body class="theme-blush">

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto col-sm-12">
                <form class="card auth_form">
                    <div class="header">
                    <img class="logo" src="{{ url('back/images/logo.svg') }}" alt="">
                        <h5>Forgot Password?</h5>
                        
                    </div>
                    <div class="body">
                        <form>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Enter your email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SUBMIT</button>
                        </form>
                        <span style="text-align: center; display: block; margin-top: 15px;">Enter your e-mail address to reset your password. Then check your email.</span>  
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span>Developed by <a href="#" target="_blank">Nasrullah Mansur</a></span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery Core Js -->
<script src="{{ asset('back/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('back/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
</body>
</html>