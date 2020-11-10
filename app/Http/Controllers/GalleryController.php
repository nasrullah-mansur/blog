<?php

namespace App\Http\Controllers;

use App\Post;
use App\Profile;
use App\Slider;
use App\User;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index() {
        $users = Profile::paginate(8);
        $sliders = Slider::paginate(8);
        $blogs = Post::paginate(8);
        return view('gallery.index', compact('users', 'sliders', 'blogs'));
    }

}
