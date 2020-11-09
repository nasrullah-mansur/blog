@extends('layouts.front')

@section('page_title')
Blog HTML5 Template
@endsection

        @section('slider')
        <!-- hero-area start -->
        <section class="hero-area ">
            <div class="slider-active slider-arrow">
                @foreach($sliders as $slider)
                <div class="single-slider slide-height d-flex align-items-end" data-overlay="dark-gradient"
                    style="background-image: url({{ url('front/images/slider/', $slider->image) }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider pb-60">
                                    <div class="slider__text">
                                        <h3 class="mb-15" data-animation="fadeInUp" data-delay=".4s">{{ $slider->text }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- hero-area end -->
        @endsection
                    @section('content')
                    <div class="col-xl-8 col-lg-8">
                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="postbox mb-20">
                                    <div class="postbox__thumb">
                                        <a href="{{ route('single.blog', $post->slug) }}">
                                            <img src="{{ url('front/images/post', $post->image) }}" alt="hero image">
                                        </a>
                                    </div>
                                </div>
                                <div class="postbox__text mb-30">
                                    <h4 class="title-16 font-600 pr-0">
                                        <a href="{{ route('single.blog', $post->slug) }}"> {{ $post->title }} </a>
                                    </h4>
                                    <div class="postbox__text-meta pb-10">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>{{ $post->created_at->format('d M Y') }}</span>
                                            </li>
                                            <li>
                                                <i class="far fa-comment"></i>
                                                <span>(03)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="desc-text mb-20">
                                        <p>
                                            @if(strlen($post->summery) <= 150)
                                            {{ $post->summery }}
                                            @else
                                            {{ substr($post->summery, 0, 150) }}...
                                            @endif
                                        </p>
                                    </div>
                                    <a href="{{ route('single.blog', $post->slug) }}" class="btn btn-soft">read more</a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="row mt-10 mb-60">
                            <div class="col-12">
                                {{ $posts->onEachSide(5)->links('front.pagination') }}
                            </div>
                        </div>
                    </div>
                    @endsection
                    