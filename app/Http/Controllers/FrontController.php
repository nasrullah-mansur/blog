<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Slider;
use App\Tag;

use function GuzzleHttp\Promise\all;

class FrontController extends Controller
{

    public function index() {
        $sliders = Slider::where('status', 1)->get();
        $categories = Category::with('posts')->get();
        $posts = Post::with('category', 'tag', 'user')->where('status', 1)->paginate(10);
        return view('front.index', compact('sliders', 'posts', 'categories'));
    }



    public function singleblog($slug) {
        $post = POST::with('category', 'tag', 'user')->where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        return view('front.view', compact('post', 'categories'));
    }



    public function blogcategory($slug) {
        $category_id = Category::where('slug', $slug)->firstOrFail()->id;
        $posts = Category::with('posts')->where('id', $category_id)->first()->posts;
        $categories = Category::all();
        return view('front.blog', compact('posts', 'categories'));
    }


    public function blogtag($slug) {
        $tag_id = Tag::where('slug', $slug)->firstOrFail()->id;
        $posts = Tag::with('posts')->where('id', $tag_id)->first()->posts->reverse();

        $categories = Category::all();
        return view('front.blog', compact('posts', 'categories'));
    }




    public function show() {
        return view('front.single_blog');
    }

    public function contact() {
        return view('front.contact');
    }

    
}
