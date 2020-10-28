<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::resource('/category', 'CategoryController');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('/profile', 'ProfileController');
Route::resource('/post', 'PostController');
Route::resource('/tag', 'TagController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





// extra route;
Route::get('/edit_test_profile', function() {
    return view('profile.edit');
});
Route::get('/profile_pass_change', function() {
    return view('profile.pass');
});
Route::get('/social_media', function() {
    return view('setting.social');
});
Route::get('/settings', function() {
    return view('setting.settings');
});

Route::get('/new_login', function() {
    return view('auth.new_login');
});

Route::get('/new_register', function() {
    return view('auth.new_register');
});

Route::get('/new_reset', function() {
    return view('auth.passwords.new_reset');
});


Route::get('/banner_slider', function() {
    return view('slider.banner');
});

Route::get('/banner_sidebar', function() {
    return view('slider.sidebar');
});

Route::get('/admin', function() {
    return 'ok';
});









// Backend Routes;
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function() {
        return 'ok';
    });
});










// Front Routes;
Route::get('/', 'FrontController@index')->name('frontIndex');
Route::get('/blog', 'FrontController@blog')->name('frontBlog');
Route::get('/single-blog', 'FrontController@show')->name('frontSingleBlog');
Route::get('/contact', 'FrontController@contact')->name('frontContact');