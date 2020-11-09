<?php

use App\Http\Controllers\UserController;
use App\User;
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

Route::get('/new_reset', function() {
    return view('auth.passwords.new_reset');
});


Route::get('/test',function () {
    return view('front.view');
});

// Backend Routes;
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('/category', 'CategoryController');
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('/profile', 'ProfileController');
    Route::get('change-password', 'passwordController@index');
    Route::post('change-password', 'passwordController@store')->name('change.password');
    Route::resource('/tag', 'TagController');
    Route::resource('/post', 'PostController');

    // Administrator;
    Route::middleware(['administrator'])->group(function () {
        Route::resource('/slider', 'SliderController');
        Route::resource('/social', 'SocialController');
        Route::resource('/setting', 'SettingController');  
    });

    // Super admin;
    Route::middleware(['super_admin'])->group(function () {
        Route::resource('/slider', 'SliderController');
        Route::resource('/social', 'SocialController');
        Route::resource('/setting', 'SettingController');  
        Route::resource('/user', 'UserController');
    });
    
});




// Front Routes;
Route::get('/', 'FrontController@index')->name('frontIndex');
Route::get('/blog/category/{slug}', 'FrontController@blogcategory')->name('blog.category');


Route::get('blog/{slug}', 'FrontController@singleblog')->name('single.blog');


Route::get('/contact', 'FrontController@contact')->name('frontContact');