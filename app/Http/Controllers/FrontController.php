<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Slider;

use function GuzzleHttp\Promise\all;

class FrontController extends Controller
{

    public function index() {
        $sliders = Slider::where('status', 1)->get();
        $categories = Category::with('childs')->where('p_id', 0)->get();
        $posts = Post::with('category', 'tag', 'user')->paginate(10);
        // return $posts;
        return view('front.index', compact('sliders', 'posts', 'categories'));
    }



    public function singleblog($slug) {
        $post = POST::with('category', 'tag', 'user')->where('slug', $slug)->firstOrFail();
        $categories = Category::with('childs')->where('p_id', 0)->get();
        return view('front.view', compact('post', 'categories'));
    }



    public function blogcategory($slug) {
        $category_id = Category::where('slug', $slug)->firstOrFail()->id;




        // return $cats = Category::with('posts')->where('p_id', $category_id)->get();

        $posts = Category::with('posts')->get();


        return $posts;

        // foreach($posts as $post) {
        //     return count($post->posts);
        // }

   


        $categories = Category::with('childs')->where('p_id', 0)->get();
        return view('front.blog', compact('posts', 'categories'));
    }




    public function show() {
        return view('front.single_blog');
    }

    public function contact() {
        return view('front.contact');
    }

    
}
