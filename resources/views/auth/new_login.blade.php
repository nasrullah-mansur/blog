<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Aero Bootstrap4 Admin :: Sign In</title>
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
                <div class="card auth_form">
                    <div class="header">
                        <img class="logo" src="{{ url('back/images/logo.svg') }}" alt="">
                        <h5>Log in</h5>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="input-group flex-wrap mb-3">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email or Username" name="email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback d-block w-100" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3 flex-wrap">
                                <input type="text" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                <div class="input-group-append"> 
                                    
                                
                                    <span class="input-group-text px-0 color-primary">

                                   
                                    </span>
                                </div>  
                                @error('password')
                                    <span class="invalid-feedback d-block w-100" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                       
                            </div>
                            <div class="checkbox">
                                <input id="remember_me" type="checkbox" {{ old('remember') ? 'checked' : '' }} name="remember">
                                <label for="remember_me">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">LOG IN</button>
                        </form>                        
                        <div class="signin_with mt-3">
                            <p class="mb-0">or Sign Up using</p>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round facebook"><i class="zmdi zmdi-facebook"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round twitter"><i class="zmdi zmdi-twitter"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round google"><i class="zmdi zmdi-google-plus"></i></button>
                        </div>
                    </div>
                </div>
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