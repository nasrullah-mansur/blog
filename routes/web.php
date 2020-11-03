<?php

use App\Http\Controllers\UserController;
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
Auth::routes(['register' => false]);



Route::resource('/post', 'PostController');
Route::resource('/tag', 'TagController');


// extra route;
// Route::get('/edit_test_profile', function() {
//     return view('profile.edit');
// });


Route::get('/settings', function() {
    return view('setting.settings');
});


Route::get('/new_reset', function() {
    return view('auth.passwords.new_reset');
});


Route::get('/banner_slider', function() {
    return view('slider.create_banner');
});

Route::get('/banner_sidebar', function() {
    return view('slider.sidebar');
});


// Backend Routes;
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('/category', 'CategoryController');
    Route::resource('/slider', 'SliderController');
    Route::resource('/social', 'SocialController');
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('/profile', 'ProfileController');

    Route::get('change-password', 'passwordController@index');
    Route::post('change-password', 'passwordController@store')->name('change.password');
});


// Supper admin;
Route::middleware(['auth','super_admin'])->prefix('admin')->group(function () {
    Route::resource('/user', 'UserController');
});









// Front Routes;
Route::get('/', 'FrontController@index')->name('frontIndex');
Route::get('/blog', 'FrontController@blog')->name('frontBlog');
Route::get('/single-blog', 'FrontController@show')->name('frontSingleBlog');
Route::get('/contact', 'FrontController@contact')->name('frontContact');