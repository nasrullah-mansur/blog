@extends('layouts.front')

@section('page_title')
Blog HTML5 Template :: Single Blog
@endsection
                        @section('content')
                        <div class="col-xl-8 col-lg-8">
                             <!-- post-details -->
                            <div class="post-details">
                                <h2 class="details-title mb-15">{{ $post->title }}</h2>

                                <!-- meta -->
                                <div class="postbox__text-meta pb-30">
                                    <ul>
                                        <li>
                                            <i class="far fa-user-circle"></i>
                                            <span>{{ $post->user->profile->name }}</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>{{ $post->created_at->format('Y-M-d') }}</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>

                                 <!-- post-thumb -->
                                <div class="post-thumb mb-25">
                                    <img class="img-fluid w-100" src="{{ url('front/images/post', $post->image) }}" alt="">
                                </div>

                                <!-- post-content -->
                                <div class="post-content">
                                    {!! $post->summery !!}
                                    <br>
                                    {!! $post->content !!}
                                </div>


                                 <!-- s-content__pagenav -->
                                <div class="s-content__pagenav mt-60">
                                    <div class="s-content__nav">
                                       <div class="row">
                                           <div class="col-md-6">
                                                <div class="s-content__prev mb-30">
                                                    <a href="#0" rel="prev">
                                                        <span>Previous Post</span>
                                                         Farmers plead for bullets to put down emaciated stock
                                                    </a>
                                                </div>
                                           </div>
                                           <div class="col-md-6">
                                                <div class="s-content__next mb-30 text-left text-md-right">
                                                    <a href="#0" rel="next">
                                                        <span>Next Post</span>
                                                         Nahan downplays Liberal lership tensions after white ant
                                                    </a>
                                                </div>
                                           </div>
                                       </div>
                                    </div>
                                </div>

                                 <!-- also-like -->
                                <div class="also-like mt-30">
                                    <div class="section-title mb-30">
                                        <h2>You may also like</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="postbox mb-30">
                                                <div class="postbox__thumb">
                                                    <a href="#">
                                                        <img class="img-100" src="{{ url('front/img/trendy/sm1.jpg') }}" alt="hero image">
                                                    </a>
                                                </div>
                                                <div class="postbox__text pt-10">
                                                    <div class="postbox__text-meta pb-10">
                                                        <ul>
                                                            <li>
                                                                <i class="fas fa-calendar-alt"></i>
                                                                <span>01 Sep 2018</span>
                                                            </li>
                                                            <li>
                                                                <i class="far fa-comment"></i>
                                                                <span>(03)</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="pr-0">
                                                        <a href="#">Paul Manafort’s Accountant Testifies She Helped Alter Financial</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="postbox mb-30">
                                                <div class="postbox__thumb">
                                                    <a href="#">
                                                        <img class="img-100" src="{{ url('front/img/trendy/sm2.jpg') }}" alt="hero image">
                                                    </a>
                                                </div>
                                                <div class="postbox__text pt-10">
                                                    <div class="postbox__text-meta pb-10">
                                                        <ul>
                                                            <li>
                                                                <i class="fas fa-calendar-alt"></i>
                                                                <span>01 Sep 2018</span>
                                                            </li>
                                                            <li>
                                                                <i class="far fa-comment"></i>
                                                                <span>(03)</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="pr-0">
                                                        <a href="#">Paul Manafort’s Accountant Testifies She Helped Alter Financial</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="postbox mb-30">
                                                <div class="postbox__thumb">
                                                    <a href="#">
                                                        <img class="img-100" src="{{ url('front/img/trendy/sm3.jpg') }}" alt="hero image">
                                                    </a>
                                                </div>
                                                <div class="postbox__text pt-10">
                                                    <div class="postbox__text-meta pb-10">
                                                        <ul>
                                                            <li>
                                                                <i class="fas fa-calendar-alt"></i>
                                                                <span>01 Sep 2018</span>
                                                            </li>
                                                            <li>
                                                                <i class="far fa-comment"></i>
                                                                <span>(03)</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="pr-0">
                                                        <a href="#">Paul Manafort’s Accountant Testifies She Helped Alter Financial</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <!-- post-comments -->
                                <div class="post-comments mt-30">
                                    <div class="section-title mb-30">
                                        <h2>Recent Comments</h2>
                                    </div>
                                    <div class="latest-comments">
                                        <ul>
                                            <li>
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="{{ url('front/img/user/user-01.jpg') }}" alt="">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h5>Omar Elnagar</h5>
                                                            <span>September 13, 2018 at 10:38 AM</span>
                                                        </div>
                                                        <p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call
                                                            him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
                                                        <a href="#"><i class="fas fa-reply-all"></i> Reply</a>
                                                    </div>
                                                </div>
                                                <ul class="comments-reply">
                                                    <li>
                                                        <div class="comments-box">
                                                            <div class="comments-avatar">
                                                                <img src="{{ url('front/img/user/user-02.jpg') }}" alt="">
                                                            </div>
                                                            <div class="comments-text">
                                                                <div class="avatar-name">
                                                                    <h5>Omar Elnagar</h5>
                                                                    <span>September 13, 2018 at 10:38 AM</span>
                                                                </div>
                                                                <p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They
                                                                    call him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
                                                                <a href="#"><i class="fas fa-reply-all"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="{{ url('front/img/user/user-05.jpg') }}" alt="">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h5>Omar Elnagar</h5>
                                                            <span>September 13, 2018 at 10:38 AM</span>
                                                        </div>
                                                        <p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call
                                                            him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
                                                        <a href="#"><i class="fas fa-reply-all"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                 <!-- post-comments-form -->
                                <div class="post-comments-form mt-40 mb-40">
                                    <div class="section-title mb-30">
                                        <h2>Recent Comments</h2>
                                    </div>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <input type="text" placeholder="Your Name">
                                            </div>
                                            <div class="col-xl-6">
                                                <input type="text" placeholder="Your Email">
                                            </div>
                                            <div class="col-xl-12">
                                                <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Your Comments"></textarea>
                                                <button class="btn brand-btn" type="submit">Send message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endsection

                        @section('tags')
                        <div class="widget widget-border mb-40">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tagcloud">
                                @foreach($post->tag->take(10) as $tag)
                                <a href="#">{{ $tag->name }}</a>

                                @endforeach
                            </div>
                        </div>
                        @endsection
                        