<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Profile;
use App\Slider;
use App\Subscriber;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $post_count = count(Post::all('id'));
        $category_count = count(Category::all('id'));
        $tag_count = count(Tag::all('id'));
        $user_count = count(User::all('id'));
        $slider_count = count(Slider::all('id'));
        $profile_count = count(Profile::where('image', '!=' , null)->select('id')->get());
        $subscriber_count = count(Subscriber::all());

        $gallery_count = $profile_count + $slider_count + $post_count;

        // return $profile_count + $slider_count + $post_count;
        return view('dashboard.index', compact('post_count', 'category_count', 'tag_count', 'user_count', 'gallery_count', 'subscriber_count'));
    }
}
