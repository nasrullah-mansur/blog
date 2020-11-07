<?php

namespace App\Http\Controllers;

use App\Slider;

class FrontController extends Controller
{
    public function index() {
        $sliders = Slider::all();
        return view('front.index', compact('sliders'));
    }

    public function blog() {
        return view('front.blog');
    }

    public function show() {
        return view('front.single_blog');
    }

    public function contact() {
        return view('front.contact');
    }

    
}
