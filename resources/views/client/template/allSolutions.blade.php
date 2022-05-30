@extends('client.layouts.appClient')
@section('content')
    <div class="blog_container blog_page_one">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 blog-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-warp-1 blog_warp_lay_1">
                                <div class="blog_imgg">
                                    <img src="{{asset('frontend/images/blog_1.jpg')}}" alt="" />
                                </div>
                                <div class="blog_content_warp">
                                    <a href="#" class="blog_datee"><i class="fa fa-calendar"></i>  Feb 17  </a>
                                    <a href="#" class="subtext"><i class="fa fa-tag"></i>  office </a>
                                    <a href="#" class="subtext"><i class="fa fa-comment-o"> </i> 5 </a>
                                    <h5><a href="blog.html">Most small businesses can not recover from cyber breaches</a></h5>
                                    <p>Lorem Ipsum is simply dummy text ofthe anadthe printing of typ afte res etting at indus tryd ummy texat the dummy text ofthe anadthe ageprinting dummy text ofthe anadthe printing of dummy text ofthe anadthe printing of dummy text ofthe
                                        anadthe printing of typesetting industrydummy texat the dummy text ofthe anadthe printing dummy text ofthe anadthe printing of dummy text ofthe anadthe printing of</p>
                                    <a href="single-blog.html" class="serv_read">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-warp-1 blog_warp_lay_1">
                                <div class="blog_imgg">
                                    <img src="{{asset('frontend/images/blog_2.jpg')}}" alt="" />
                                </div>
                                <div class="blog_content_warp">
                                    <a href="#" class="blog_datee"><i class="fa fa-calendar"></i> Feb 24  </a>
                                    <a href="#" class="subtext"><i class="fa fa-tag"></i>  Repair </a>
                                    <a href="#" class="subtext"><i class="fa fa-comment-o"> </i> 7 </a>
                                    <h5><a href="blog.html">Hacker requests for wire to transfers are topping a email</a></h5>
                                    <p>Lorem Ipsum is simply dummy text ofthe anadthe printing of typ afte res etting at indus tryd ummy texat the dummy text ofthe anadthe ageprinting dummy text ofthe anadthe printing of dummy text ofthe anadthe printing of dummy text ofthe
                                        anadthe printing of typesetting industrydummy texat the dummy text ofthe anadthe printing dummy text ofthe anadthe printing of dummy text ofthe anadthe printing of</p>
                                    <a href="single-blog.html" class="serv_read">read more</a>
                                </div>
                            </div>
                        </div>
                        <!--/ Blog Item -->

                        <div class="col-md-12">
                            <nav class="pagination">
                                <ul class="pager">
                                    <li class="pagi-big"><a href="#">01</a></li>
                                    <li>
                                        <a href="#"> 02 </a>
                                    </li>
                                    <li>
                                        <a href="#">03</a>
                                    </li>
                                    <li>
                                        <a href="#">04</a>
                                    </li>
                                    <li>
                                        <a href="#">&gt;</a>
                                    </li>
                                </ul>
                            </nav>
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
                                <a href="single-blog.html">Mobile service</a>
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
    <!--  End : Blog Page Content
==================================================-->
 
@endsection