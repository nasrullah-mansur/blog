
<?php
use App\User;
$user_info = User::with('profile')->where('id', auth()->user()->id)->get();

if($user_info->first()->role == 1) {
    $user_role = 'Super Admin';
} elseif($user_info->first()->role == 2) {
    $user_role = 'Administrator';
} else {
    $user_role = 'Blogger';
}
?>

<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Aero : @yield('title') ::</title>
<link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon">
<link rel="stylesheet" href="{{asset('back/plugins/bootstrap/css/bootstrap.min.css')}}">
<!-- Favicon-->
@yield('css_plugins')
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('back/css/style.min.css')}}">
@yield('custom_css')
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ url('back/images/loader.svg') }}" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="javascript:void(0);" class="js-right-sidebar" title="Design"><i class="zmdi zmdi-apps"></i></a></li>
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" title="Notifications" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">Notifications</li>
                <li class="body">
                    <ul class="menu list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                                <div class="menu-info">
                                    <h4>8 New Members joined</h4>
                                    <p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-amber"><i class="zmdi zmdi-shopping-cart"></i></div>
                                <div class="menu-info">
                                    <h4>4 Sales made</h4>
                                    <p><i class="zmdi zmdi-time"></i> 22 mins ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> Deleted account</h4>
                                    <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-green"><i class="zmdi zmdi-edit"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> Changed name</h4>
                                    <p><i class="zmdi zmdi-time"></i> 2 hours ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-grey"><i class="zmdi zmdi-comment-text"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> Commented your post</h4>
                                    <p><i class="zmdi zmdi-time"></i> 4 hours ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-purple"><i class="zmdi zmdi-refresh"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> Updated status</h4>
                                    <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-blue"><i class="zmdi zmdi-settings"></i></div>
                                <div class="menu-info">
                                    <h4>Settings Updated</h4>
                                    <p><i class="zmdi zmdi-time"></i> Yesterday </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
            </ul>
        </li>
        <li><a href="{{ route('setting.index') }}" class="" title="Setting"><i class="zmdi zmdi-settings"></i></a></li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="zmdi zmdi-power"></i> </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{ route('dashboard') }}"><i class="zmdi zmdi-laptop-mac ml-3"></i><span class="m-l-10">Visit Site</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{ $user_info->first()->profile->image == '' ? url('back/images/profile_av.jpg') : $user_info->first()->profile->image}}" alt="User"></a>
                    <div class="detail">
                        <h4>{{ $user_info->first()->profile->name == '' ? 'Your Name' : $user_info->first()->profile->image }}</h4>
                        <small>{{ $user_role }}</small>                        
                    </div>
                </div>
            </li>
            <li class="{{ (Request::is('admin') ? 'active' : ' ') }}"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="{{ (Request::is('admin/profile*', 'admin/change-password') ? 'active open' : '') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account"></i><span>Our Profile</span></a>
                <ul class="ml-menu">
                    <li class="{{ Route::is('profile.index') ? 'active' : '' }}"><a href="{{ route('profile.index') }}">My Profile</a></li>
                    <li class="{{ (Request::is('admin/change-password') ? 'active' : '') ? 'active' : '' }}"><a href="{{ route('change.password') }}">Change Password</a></li>
                </ul>
            </li>
            @if($user_info->first()->role == 1 || $user_info->first()->role == 2)
            <li class="{{ (Request::is('admin/slider*') ? 'active open' : '') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-slideshare"></i><span>Slider</span></a>
                <ul class="ml-menu">
                    <li class="{{ Route::is('slider.index') ? 'active' : '' }}"><a href="{{ route('slider.index') }}">Banner Slider</a></li>
                    <li class="{{ (Route::is('slider.create') ? 'active' : '') }}"><a href="{{ route('slider.create') }}">Add New Slider</a></li>
                </ul>
            </li>
            
            <li class="{{ (Request::is('admin/setting*', 'admin/social*') ? 'active open' : '') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-settings"></i><span>Setting</span></a>
                <ul class="ml-menu">
                    <li class="{{ Route::is('setting.index') ? 'active' : '' }}"><a href="{{ route('setting.index') }}">Theme Setting</a></li>
                    <li><a href="sign-in.html">Menu</a></li>
                    <li class="{{ Route::is('social.index') ? 'active' : '' }}"><a href="{{ route('social.index') }}">Social Media</a></li>
                </ul>
            </li>
            @endif
            <li class="{{ (Request::is('admin/post*', 'admin/category*', 'admin/tag*') ? 'active open' : '') }}"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Post</span></a>
                <ul class="ml-menu">
                    <li class="{{ Route::is('post.index') ? 'active' : '' }}"><a href="{{ route('post.index') }}">Post List</a></li>
                    <li class="{{ Route::is('post.create') ? 'active' : '' }}"><a href="{{ route('post.create') }}">Create Post</a></li>
                    <li class="{{ Route::is('category.index', 'category.edit') ? 'active' : '' }}"><a href="{{ route('category.index') }}">Category</a></li>
                    <li class="{{ Route::is('tag.index', 'tag.edit') ? 'active' : '' }}"><a href="{{ route('tag.index') }}">Tag</a></li>
                </ul>
            </li>
            @if($user_info->first()->role == 1)
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>Media</span></a>
                <ul class="ml-menu">
                    <li><a href="file-dashboard.html">Images</a></li>
                    <li><a href="file-documents.html">File Manager</a></li>
                </ul>
            </li>
            
            <li class="{{ (Request::is('admin/user*') ? 'active open' : '') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts"></i><span>Users</span></a>
                <ul class="ml-menu">
                    <li class="{{ Route::is('user.index') ? 'active' : '' }}"><a href="{{ route('user.index') }}">All User</a></li>
                    <li class="{{ Route::is('user.create') ? 'active' : '' }}"><a href="{{ route('user.create') }}">Add New User</a></li>
                </ul>
            </li>
            @endif
        </ul>
    </div>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <div class="nav nav-tabs sm">
        <span class="text-white"> Theme Design</span>
    </div>
    <div class="tab-content">
        <div class="tab-pane active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Theme Option</h6>
                    <div class="light_dark">
                        <div class="radio">
                            <input type="radio" name="radio1" id="lighttheme" value="light" checked="">
                            <label for="lighttheme">Light Mode</label>
                        </div>
                        <div class="radio mb-0">
                            <input type="radio" name="radio1" id="darktheme" value="dark">
                            <label for="darktheme">Dark Mode</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Color Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple"><div class="purple"></div></li>                   
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush" class="active"><div class="blush"></div></li>
                    </ul>                    
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox rtl_support">
                                <input id="checkbox1" type="checkbox" value="rtl_view">
                                <label for="checkbox1">RTL Version</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox ms_bar">
                                <input id="checkbox2" type="checkbox" value="mini_active">
                                <label for="checkbox2">Mini Sidebar</label>
                            </div>
                        </li>
                    </ul>
                </div>                
            </div>                
        </div>       
        
    </div>
</aside>

<section class="content">
    <div class="body_scroll">    
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>@yield('page_title')</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="blog-dashboard.html">Blog</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    @yield('top_btn')
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="{{asset('back/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('back/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 

@yield('js_plugins')

<script src="{{asset('back/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
<!-- <script src="{{asset('back/js/pages/blog/blog.js')}}"></script> -->

@yield('custom_js')
</body>
</html>