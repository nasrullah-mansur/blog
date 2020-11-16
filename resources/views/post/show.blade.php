@extends('layouts.back')

@section('title')
Blog Create
@endsection

@section('page_title')
Post show
@endsection

@section('breadcrumb')
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
    <li class="breadcrumb-item active">Single Post</li>
</ul>
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="blogitem mb-5">
                    <div class="blogitem-image">
                        <a href="blog-details.html"><img src="{{ url('front/images/post', $post_info->image) }}" alt="blog image"></a>
                        <span class="blogitem-date">{{ $post_info->created_at->format("F j, Y, g:i a") }}</span>
                    </div>
                    <div class="blogitem-content">
                        <div class="blogitem-header">
                            <div class="blogitem-meta">
                                <span><i class="zmdi zmdi-account"></i>By {{ $post_info->user->profile->name }}</span>
                                <span><i class="zmdi zmdi-comments"></i>Comments(3)</span>
                                <span><i class="zmdi zmdi-bookmark"></i>{{ $post_info->category->name }}</span>
                            </div>
                        </div>
                        <h5><a href="javascript:void(0);">{!! $post_info->title !!}</a></h5>
                        <p>{!! $post_info->summery !!}</p>
                        {!! $post_info->content !!}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Comments</strong> (2)</h2>
                </div>
                <div class="">
                    <ul class="comment-reply list-unstyled">
                        <li>
                            <div class="icon-box"><img class="img-fluid img-thumbnail"
                                    src="{{ asset('back/images/sm/avatar2.jpg') }}" alt="Awesome Image"></div>
                            <div class="text-box">
                                <h5>Kareem Todd</h5>
                                <span class="comment-date">Wednesday, October 17, 2018 at 4:00PM.</span>
                                <a href="javascript:void(0);" class="replybutton"><i
                                        class="zmdi zmdi-mail-reply-all"></i> Reply</a>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box"><img class="img-fluid img-thumbnail"
                                    src="{{ asset('back/images/sm/avatar1.jpg') }}" alt="Awesome Image"></div>
                            <div class="text-box">
                                <h5>Stillnot david</h5>
                                <span class="comment-date">Wednesday, October 17, 2018 at 4:00PM.</span>
                                <a href="javascript:void(0);" class="replybutton"><i
                                        class="zmdi zmdi-mail-reply-all"></i> Reply</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Leave</strong> a Comment</h2>
                </div>
                <div class="">
                    
                    <form class="row comment-form mt-2">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea rows="4" class="form-control no-resize"
                                    placeholder="Please type what you want..."></textarea>
                            </div>
                            <button type="submit" class="btn btn btn-primary">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Categories</strong></h2>
                </div>
                <div class="body">
                    <ul class="list-unstyled mb-0 widget-categories">
                        @foreach($categories as $category)
                        <li><a href="{{ route('post.category', $category->slug) }}">{{ ucwords($category->name) }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Recent</strong> Posts</h2>
                </div>
                <div class="body">
                    <ul class="list-unstyled mb-0 widget-recentpost">
                        <li>
                            <a href="blog-details.html"><img src="{{ asset('back/images/image-gallery/1.jpg') }}"
                                    alt="blog thumbnail"></a>
                            <div class="recentpost-content">
                                <a href="blog-details.html">Fundamental analysis services</a>
                                <span>August 01, 2018</span>
                            </div>
                        </li>
                        <li>
                            <a href="blog-details.html"><img src="{{ asset('back/images/image-gallery/2.jpg') }}"
                                    alt="blog thumbnail"></a>
                            <div class="recentpost-content">
                                <a href="blog-details.html">Steps to a successful Business</a>
                                <span>November 01, 2018</span>
                            </div>
                        </li>
                        <li>
                            <a href="blog-details.html"><img src="{{ asset('back/images/image-gallery/3.jpg') }}"
                                    alt="blog thumbnail"></a>
                            <div class="recentpost-content">
                                <a href="#blog-details.html">Development Progress Conference</a>
                                <span>December 01, 2018</span>
                            </div>
                        </li>
                        <li>
                            <a href="blog-details.html"><img src="{{ asset('back/images/image-gallery/12.jp') }}g"
                                    alt="blog thumbnail"></a>
                            <div class="recentpost-content">
                                <a href="blog-details.html">Steps to a successful Business</a>
                                <span>December 15, 2018</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <h2><strong>Tag</strong> Clouds</h2>
                </div>
                <div class="body">
                    <ul class="list-unstyled mb-0 tag-clouds">
                        @foreach($post_info->tag as $tag)
                        <li><a href="javascript:void(0);" class="tag badge badge-info">{{ ucwords($tag->name) }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
