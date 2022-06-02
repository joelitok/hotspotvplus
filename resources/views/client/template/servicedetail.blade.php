@extends('client.layouts.appClient')
@section('content')
    <!-- Start : Blog Page Content  
==================================================-->
    <div class="blog_container single_blog_page">
        <div class="container">
            <div class="row">
                <!-- Blog Area -->
                <div class="col-md-8 col-xs-12 blog-area blog_page_one">
                    <div class="blog-warp-1 blog_warp_lay_1">
                        <div class="blog_imgg">
                            <img src="{{asset('frontend/images/blog_2.jpg')}}" alt="" />
                        </div>
                        <div class="blog_content_warp">
                            <a href="#" class="blog_datee"><i class="fa fa-calendar"></i>  Feb 24  </a>
                            <a href="#" class="subtext"><i class="fa fa-tag"></i>  Marketing </a>
                            <a href="#" class="subtext"><i class="fa fa-comment-o"> </i> 5 </a>
                            <h5><a href="blog.html">Most small businesses can not recover from cyber breaches</a></h5>
                            <p>Lorem Ipsum is simply dummy text ofthe anadthe printing of typ afte res etting at indus tryd ummy texat the dummy text ofthe anadthe ageprinting dummy text ofthe anadthe printing of dummy text ofthe anadthe printing of dummy text ofthe
                                        anadthe printing of typesetting industrydummy texat the dummy text ofthe anadthe printing dummy text ofthe anadthe printing of dummy text ofthe anadthe printing of</p>
                            <p>Lorem Ipsum is simply dummy text ofthe anadthe printing of typ afte res etting at indus tryd ummy texat the dummy text ofthe anadthe ageprinting dummy text ofthe anadthe printing of dummy text ofthe anadthe printing of dummy text ofthe
                                        anadthe printing of typesetting industrydummy texat the dummy text ofthe anadthe printing dummy text ofthe anadthe printing of dummy text ofthe anadthe printing of</p>

                            <div class="sing_blog_middle_box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sing_blog_img">
                                            <img src="{{asset('frontend/images/blog_1.jpg')}}" alt="Image">
                                        </div>
                                        <div class="sing_blog_text">
                                            <p>simply dummy textar ofthe anadthe printing ofaft typesetting industry dummy texat the dummy text ofthe anadthe printing dummy text rinting of dummy text ofthe is simply dummy text ofthe anadthe prin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sing_blog_bottom_box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Lorem Ipsum is simply dummy text ofthe anadthe printing of typ afte res etting at indus tryd ummy texat the dummy text ofthe anadthe ageprinting dummy text ofthe anadthe printing of dummy text ofthe anadthe printing of dummy text ofthe
                                        anadthe printing of typesetting industrydummy texat the dummy text ofthe anadthe printing dummy text ofthe anadthe printing of dummy text ofthe anadthe printing of</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ article -->
                    <div class="post-option clearfix">
                        <div class="pull-left">
                            <a href="#" class="prev-post"><span class="arrow-icon arrow_carrot-left"></span> &nbsp;PREV POST</a>
                        </div>
                        <span class="middle-icon"><a href="blog.html" class="icon_grid-3x3"></a></span>
                        <div class="pull-right">
                            <a href="#" class="next-post">NEXT POST &nbsp;<span class="arrow-icon arrow_carrot-right"></span></a>
                        </div>
                    </div>

                   
                </div>
                <!--/ Blog Area -->

                <!-- Widget Area -->
                <div class="col-md-4 col-xs-12 widget-area">
                    <!-- Widget Search -->
                    <aside class="widget widget-search">
                        <!-- input-group -->
                        <div class="input-group">
                            <input class="form-control" placeholder="Search" type="text">
                            <span class="input-group-btn">
                                <button type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </aside>
                    <!-- Widget Search /- -->
                    <!-- Post Categories -->
                    <aside class="widget widget-post-categories">
                        <h3 class="widget-title">Post Categories</h3>
                        <ul class="categories-type">
                            <li>
                                <a href="#" title="Business">Windows</a>
                            </li>
                            <li>
                                <a href="#" title="Wordpress">laptop</a>
                            </li>
                            <li>
                                <a href="#" title="Theme Forest">Envato</a>
                            </li>
                            <li>
                                <a href="#" title="Web Developement">Website</a>
                            </li>
                            <li>
                                <a href="#" title="Statistics">Development</a>
                            </li>
                        </ul>
                    </aside>
                    <!-- Post Categories /- -->
                    <!-- Recent Post -->
                    <aside class="widget wiget-recent-post">
                        <h3 class="widget-title">Recent Post</h3>
                        <div class="recent-post-box">
                            <div class="recent_post_img">
                                <img src="{{asset('frontend/images/blog_1.jpg')}}" alt="">
                            </div>
                            <div class="recent-title">
                                <a href="single-blog.html">This is latest pic</a>
                                <p>25th Dec 2015</p>
                            </div>
                        </div>
                        <div class="recent-post-box">
                            <div class="recent_post_img">
                                <img src="{{asset('frontend/images/blog_2.jpg')}}" alt="">
                            </div>
                            <div class="recent-title">
                                <a href="single-blog.html">This is video</a>
                                <p>25th Dec 2015</p>
                            </div>
                        </div>
                        <div class="recent-post-box">
                            <div class="recent_post_img">
                                <img src="{{asset('frontend/images/blog_3.jpg')}}" alt="">
                            </div>                          
                            <div class="recent-title">
                                <a href="single-blog.html">Clean you desk </a>
                                <p>25th Dec 2015</p>
                            </div>
                        </div>
                    </aside>
                    <!-- Recent Post /- -->
                    <!-- Widget Instagram -->
                    <aside class="widget widget-instagram">
                        <h3 class="widget-title">Instagram</h3>
                        <div class="instagram-item">
                            <ul class="instagram-photo-list">
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="{{asset('frontend/images/blog_1.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="{{asset('frontend/images/blog_2.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="{{asset('frontend/images/blog_3.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="{{asset('frontend/images/blog_3.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="{{asset('frontend/images/blog_1.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" class="img-responsive" src="{{asset('frontend/images/blog_2.jpg')}}">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- Widget Instagram /- -->
                    <!-- Widget Tags -->
                    <aside class="widget widget-tags">
                        <h3 class="widget-title">Top Tags</h3><a href="#" title="Install">Install</a> <a href="#" title="Design">Design</a> <a href="#" title="Video">Video</a> <a href="#" title="Branding">Branding</a> <a href="#" title="Pakaging">Pakaging</a>
                    </aside>
                    <!-- Widget Tags /- -->
                </div>
                <!-- Widget Area /- -->
            </div>
        </div>
        <!-- Container /- -->
    </div>
    <!-- End : Blog Page Content 
==================================================-->
    
@endsection