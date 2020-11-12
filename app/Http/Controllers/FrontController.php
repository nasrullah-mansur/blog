<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Slider;
use App\Category;
use Illuminate\Support\Collection;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class FrontController extends Controller
{

    public function index() {
        $sliders = Slider::where('status', 1)->get();
        $categories = Category::with('posts')->get();
        $posts = Post::with('category', 'tag', 'user')->where('status', 1)->orderBy('created_at', 'DESC')->paginate(8);
        return view('front.index', compact('sliders', 'posts', 'categories'));
    }


    // Return a single post;
    public function singlepost($slug) {
        $post = POST::with('category', 'tag', 'user')->where('slug', $slug)->firstOrFail();
        $posts = Post::where('category_id', $post->category_id)->inRandomOrder()->limit(3)->get();

        $prev = Post::where('id', '<', $post->id)->orderBy('id','desc')->first();
        // $prev = Post::where('id', '<', $post->id)->get()->sortByDesc('id')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id')->first();

        $categories = Category::all();

        if(count($post->tag) >= 10) {
            $tags = $post->tag->random(10);
        } else {
            $tags = $post->tag;
        }

        return view('front.view', compact('post', 'posts', 'categories', 'prev', 'next', 'tags'));
    }


    // All similar categories by clicking category;
    public function postcategory($slug) {
        $category_id = Category::where('slug', $slug)->firstOrFail()->id;
        $posts = Post::where('category_id', $category_id)->paginate(4);
        $categories = Category::all();
        return view('front.post', compact('posts', 'categories'));
    }

    // All similar categories by clicking tag;
    public function posttag($slug) {
        $tag_id = Tag::where('slug', $slug)->firstOrFail()->id;
        // $posts = Tag::with('posts')->where('id', $tag_id)->first()->posts->reverse();
        
        
        // Pagination creation by function below when need to create from array;
        $data = Tag::with('posts')->where('id', $tag_id)->first()->posts;
        $posts = $this->paginate($data);

        // $posts = DB::table('posts')
        // ->join('categories', 'categories.id', '=' , 'posts.category_id')
        // ->join('post_tag', 'post_tag.post_id', '=', 'posts.id')
        // ->join('tags', 'tags.id', '=', 'post_tag.tag_id')
        // ->where('tags.slug', $slug)
        // ->select('categories.name as cat_name', 'categories.id as cat_id', 'posts.*')
        // ->paginate(2);

        // return $posts;

        // return $posts;
        
        $categories = Category::all();
        return view('front.post', compact('posts', 'categories'));
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function paginate($items, $perPage = 4, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function contact() {
        return view('front.contact');
    }
    
}
