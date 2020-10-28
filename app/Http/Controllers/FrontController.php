<?php

namespace App\Http\Controllers;


class FrontController extends Controller
{
    public function index() {
        return view('front.index');
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
