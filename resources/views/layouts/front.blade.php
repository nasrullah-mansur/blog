<?php
    use App\Setting;
    $setting = Setting::all()->first();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/', $setting->favicon) }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
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
                                                    <li class="{{ Route::is('frontIndex') ? 'active' : '' }}"><a href="{{ route('frontIndex') }}">Home</a></li>
                                                    <li><a href="{{ route('frontContact') }}">contact</a></li>
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
    @yield('slider')



        <!-- news area -->
        <section class="news-area mt-60">
            <!-- trendy news -->
            <div class="container">
                <div class="row">
                   @yield('content')
                    <div class="col-xl-4 col-lg-4">
                        <div class="widget widget-border mb-40">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                @foreach($categories as $category)
                                <li><a href="{{ route('post.category', $category->slug) }}">{{ $category->name}} <span>{{ count($category->posts) }}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget-border mb-40">
                            <h3 class="widget-title">Popular posts</h3>
                            <div class="post__small mb-30">
                                <div class="post__small-thumb f-left">
                                    <a href="#">
                                        <img src="{{ url('front/img/trendy/xs/xs-1.jpg') }}" alt="hero image">
                                    </a>
                                </div>
                                <div class="post__small-text fix pl-10">
                                    <span class="sm-cat">
                                        <a href="#">Fashion</a>
                                    </span>
                                    <h4 class="title-13 pr-0">
                                        <a href="#">Husar asks expenses authority to entitlements after Bruno</a>
                                    </h4>
                                    <div class="post__small-text-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>01 Sep 2018</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post__small mb-30">
                                <div class="post__small-thumb f-left">
                                    <a href="#">
                                        <img src="{{ url('front/img/trendy/xs/xs-2.jpg') }}" alt="hero image">
                                    </a>
                                </div>
                                <div class="post__small-text fix pl-10">
                                    <span class="sm-cat">
                                        <a href="#">Fashion</a>
                                    </span>
                                    <h4 class="title-13 pr-0">
                                        <a href="#">Researchers claim majo throug in the fight to cure fibrosis</a>
                                    </h4>
                                    <div class="post__small-text-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>01 Sep 2018</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post__small mb-30">
                                <div class="post__small-thumb f-left">
                                    <a href="#">
                                        <img src="{{ url('front/img/trendy/xs/xs-3.jpg') }}" alt="hero image">
                                    </a>
                                </div>
                                <div class="post__small-text fix pl-10">
                                    <span class="sm-cat">
                                        <a href="#">Fashion</a>
                                    </span>
                                    <h4 class="title-13 pr-0">
                                        <a href="#">Nahan downplays Liberal lership tensions after white ant</a>
                                    </h4>
                                    <div class="post__small-text-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>01 Sep 2018</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post__small">
                                <div class="post__small-thumb f-left">
                                    <a href="#">
                                        <img src="{{ url('front/img/trendy/xs/xs-4.jpg') }}" alt="hero image">
                                    </a>
                                </div>
                                <div class="post__small-text fix pl-10">
                                    <span class="sm-cat">
                                        <a href="#">Travel</a>
                                    </span>
                                    <h4 class="title-13 pr-0">
                                        <a href="#">Farmers plead for bullets to put down emaciated stock</a>
                                    </h4>
                                    <div class="post__small-text-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>01 Sep 2018</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-border mb-40">
                            <h3 class="widget-title">Subscribe our Newsletter!</h3>
                            <p>Subscribe to our email newsletter to receive useful articles and special offers.</p>
                            <form class="widget-subscribe" method="POST" action="{{ route('subscribe') }}">
                                @csrf
                                <input type="email" placeholder="Enter your email :" name="email">
                                <button class="btn">subscribe</button>
                            </form>
                        </div>
                        <div class="widget widget-border mb-40">
                            <h3 class="widget-title">Most visited</h3>
                            <div class="postbox">
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="{{ url('front/img/details/sidebar-post.jpg') }}" alt="hero image">
                                    </a>
                                </div>
                                <div class="postbox__text pt-15">
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>01 Sep 2018</span>
                                            </li>
                                            <li>
                                                <i class="far fa-comment"></i>
                                                <span>(03)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="title-16 pr-0">
                                        <a href="#">Paul Manafort’s Accountant Testifies She Helped Alter Financial
                                            Documents</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @yield('tags')
                    </div>
                </div>
            </div>
            <!-- trendy news end -->
        </section>
        <!-- news area end -->


    </main>

        <!-- footer -->
        <footer class="footer-bg">
            <div class="subscribe-area pt-50 pb-50">
                <div class="container">
                    <div class="subscribe-separator pt-50 pb-20">
                        <div class="row">
                            <div class="col-xl-2 col-lg-12">
                                <div class="footer-logo mb-30">
                                    <a href="#"><img src="{{ url('/', $setting->footer_logo) }}" alt=""></a>
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
                                            <form method="POST" action="{{ route('subscribe') }}">
                                                @csrf
                                                <input type="email" placeholder="Enter your email" name="email">
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
                                <p> {!! $setting->copyright !!}</p>
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