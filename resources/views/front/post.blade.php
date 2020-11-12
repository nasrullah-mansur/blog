@extends('layouts.front')

@section('page_title')
post HTML5 Template :: post
@endsection



                        @section('content')
                        <div class="col-xl-8 col-lg-8 col-md-12">
                            @foreach($posts as $post)
                            <div class="postbox mb-40">
                                <div class="postbox__thumb mb-25">
                                    <a href="{{ Route('single.post', $post->slug) }}">
                                        <img src="{{ url('front/images/post', $post->image) }}" alt="hero image">
                                    </a>
                                </div>
                                <div class="postbox__text">
                                    <div class="postbox__text-meta pb-20">
                                        <ul>
                                            <li>
                                                <span class="post-cat">
                                                    <a href="javascript:void(0)" tabindex="0">{{ $post->category->name }}</a>
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span> {{ date('d-M-Y', strtotime($post->created_at)) }} </span>
                                            </li>
                                            <li>
                                                <i class="far fa-comment"></i>
                                                <span>(03)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="title-30 font-600 pr-0">
                                        <a href="{{ Route('single.post', $post->slug) }}">{!! $post->title !!}</a>
                                    </h4>
                                    <div class="desc-text mb-20">
                                        <p>{!! $post->summery !!}</p>
                                    </div>
                                    <a class="btn" href="{{ Route('single.post', $post->slug) }}">read more</a>
                                </div>
                            </div>
                            @endforeach
                            <div class="row mt-10 mb-60">
                                <div class="col-12">
                                    {{ $posts->onEachSide(5)->links('front.pagination') }}
                                </div>
                            </div>
                        </div>
                        @endsection