
<?php
    use App\Setting;
    $setting = Setting::all()->first();
?>

<!doctype html>
<html class="no-js" lang="">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bangee :: Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ url('front/img/favicon.ico') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    </head>
    <body>

    <!-- header start -->
    <header class="header">
        <div class="header__top-area black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="header__top-menu">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="header__social text-center text-md-right mt-10">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__middle pt-20">
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-4 col-md-3 d-flex align-items-center justify-content-md-start justify-content-center">
                        <div class="header__logo text-center text-md-left mb-20">
                            <a href="{{ route('frontIndex') }}"><img src="{{ url($setting->header_logo) }}" alt="Brand logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-9">
                        <div class="header__menu-area white__header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="header__right-icon header__icon-black f-right mt-17">
                                            <a href="#" data-toggle="modal" data-target="#search-modal">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="header__menu header__menu-white f-right">
                                            <nav id="mobile-menu">
                                                <ul>
                                                    <li><a href="{{ route('frontIndex') }}">Home</a></li>
                                                    <li class="active"><a href="{{ route('frontContact') }}">contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="mobile-menu"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Search -->
        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <input type="text" placeholder="Search here...">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

        <main>
            <!-- blog-area start -->
            <div class="contact-area pt-110 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="contact-info mb-30">
                                <h2>Keep in touch</h2>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-meta mb-30">
                                            <div class="contact-meta-info">
                                                <h4>Phone</h4>
                                                <p>+ 22 254 362 52 41; </p>
                                                <p>+ 22 564 241 36 54; </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-meta mb-30">
                                            <div class="contact-meta-info">
                                                <h4>E-mail</h4>
                                                <p><a href="#" class="__cf_email__" >nasrullah.cit.bd@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-meta">
                                            <div class="contact-meta-info">
                                                <h4>Address</h4>
                                                <p>252 W 43rd St New York, NY Bangladesh</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="contact-form mb-30">
                                <h3>Do you have any question?</h3>
                                <form id="contact-form" action="{{ route('contact.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <input name="name" type="text" placeholder="Name">
                                            @if($errors->has('name'))
                                            <span style="color: red;">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-xl-6">
                                            <input name="email" type="email" placeholder="Email">
                                            @if($errors->has('email'))
                                            <span style="color: red;">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-xl-12">
                                            <input name="subject" type="text" placeholder="Subject">
                                            @if($errors->has('subject'))
                                            <span style="color: red;">{{ $errors->first('subject') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-xl-12">
                                            <textarea name="content" id="mesage" cols="30" rows="10" placeholder="Message"></textarea>
                                            @if($errors->has('content'))
                                            <span style="color: red;">{{ $errors->first('content') }}</span>
                                            @endif
                                            <div style="margin-top: 30px;">
                                            <button class="btn brand-btn" type="submit">send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p class="ajax-response"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- footer -->
        <footer class="footer-bg">
            <div class="subscribe-area pt-50 pb-50">
                <div class="container">
                    <div class="subscribe-separator pt-50 pb-20">
                        <div class="row">
                            <div class="col-xl-2 col-lg-12">
                                <div class="footer-logo mb-30">
                                    <a href="#"><img src="{{ url('front/img/logo/footer-logo.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-12">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7">
                                        <div class="subscribe-title">
                                            <h2>subscribe our newsletter</h2>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5">
                                        <div class="subscribe-form mb-30">
                                            <form action="#">
                                                <input type="email" placeholder="Enter your email">
                                                <button type="submit">
                                                    subscribe
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area pt-25 pb-25">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright text-lg-left text-center">
                                <p>© Copyrights 2018. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright-links text-lg-right text-center">
                                <a href="#">Feature</a>
                                <a href="#">About Us</a>
                                <a href="#">Life Style</a>
                                <a href="#">Economic</a>
                                <a href="#">Business</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->




		<!-- JS here -->
        <script src="{{ asset('front/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('front/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('front/js/popper.min.js') }}"></script>
        <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('front/js/one-page-nav-min.js') }}"></script>
        <script src="{{ asset('front/js/slick.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('front/js/wow.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('front/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('front/js/plugins.js') }}"></script>
        <script src="{{ asset('front/js/main.js') }}"></script>
    </body>

</html>