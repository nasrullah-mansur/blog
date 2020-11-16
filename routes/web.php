<?php

use App\User;
use App\Slider;
use App\Setting;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Backend Routes;
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('/category', 'CategoryController');
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
        
        Route::post('/quick', 'EmailController@quickMail')->name('quickMail');
        Route::get('/contact', 'ContactController@index')->name('contact.index');
        Route::get('/contact/{id}', 'ContactController@show')->name('contact.show');
        Route::get('/contact/reply/{id}', 'ContactController@reply')->name('contact.reply');
        Route::post('/contact/reply/send', 'ContactController@sendreply')->name('contact.reply.send');
        Route::post('/contact/delete/{id}', 'ContactController@destroy')->name('contact.delete');

        Route::get('notifications', function() {
            // return $notifications = DB::table('notifications')->get();
            $notifications = DB::table('notifications')->orderBy('created_at', 'desc')->get();
            return  view('notification.index', compact('notifications'));
        })->name('notification');

        // Super admin;
        Route::middleware(['super_admin'])->group(function () {
            Route::resource('/user', 'UserController');
            Route::get('/gallery', 'GalleryController@index')->name('gallery');
        });
    });
        
});




// Front Routes;
Route::get('/', 'FrontController@index')->name('frontIndex');
Route::get('/post/category/{slug}', 'FrontController@postcategory')->name('post.category');
Route::get('/post/tag/{slug}', 'FrontController@posttag')->name('post.tag');
Route::get('post/{slug}', 'FrontController@singlepost')->name('single.post');
Route::get('/contact', 'FrontController@contact')->name('frontContact');

Route::post('/subscribe', 'SubscriberController@store')->name('subscribe');

Route::post('/contact', 'ContactController@store')->name('contact.store');



