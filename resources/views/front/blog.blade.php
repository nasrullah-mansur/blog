@extends('layouts.front')

@section('page_title')
Blog HTML5 Template :: Blog
@endsection



                        @section('content')
                        <div class="col-xl-8 col-lg-8 col-md-12">
                            @foreach($posts as $post)
                            <div class="postbox mb-40">
                                <div class="postbox__thumb mb-25">
                                    <a href="">
                                        <img src="" alt="hero image">
                                    </a>
                                </div>
                                <div class="postbox__text">
                                    <div class="postbox__text-meta pb-20">
                                        <ul>
                                            <li>
                                                <span class="post-cat">
                                                    <a href="javascript:void(0)" tabindex="0"></a>
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span></span>
                                            </li>
                                            <li>
                                                <i class="far fa-comment"></i>
                                                <span>(03)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="title-30 font-600 pr-0">
                                        <a href=""></a>
                                    </h4>
                                    <div class="desc-text mb-20">
                                        <p></p>
                                    </div>
                                    <a class="btn" href="">read more</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endsection