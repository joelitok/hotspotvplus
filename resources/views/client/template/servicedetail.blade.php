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
                            <img src="{{asset('/service_images/'.$service->service_image)}}" alt="" />
                        </div>
                        <div class="blog_content_warp">
                            <a href="#" class="blog_datee"><i class="fa fa-calendar"></i>{{ $service->created_at->format('d/m/Y   H:i:s') }}  </a>
                            <a href="#" class="subtext"><i class="fa fa-tag"></i>  </a>
                            <a href="#" class="subtext"><i class="fa fa-comment-o"> </i> {{$service->service_title }} </a>
                            <p style="text-align: justify;">{{$service->service_description}}</p>
                            <p style="text-align: justify;">{{$service->service_description2}}</p>

                            <div class="sing_blog_middle_box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sing_blog_img">
                                            <img src="{{asset('/service_images/'.$service->service_image)}}" alt="Image">
                                        </div>
                                        <div class="sing_blog_text">
                                            <p>{{ $service->updated_at->format('d/m/Y   H:i:s') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sing_blog_bottom_box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="text-align: justify;">{{$service->service_description3}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ article -->
                  

                   
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
                        <h3 class="widget-title">{{$service->service_title}}</h3>
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
                        <h3 class="widget-title">Autres</h3>
                        @forelse ($services as $ser)
                        <div class="recent-post-box">
                            <div class="recent_post_img">
                                <img src="{{asset('/service_images/'.$ser->service_image)}}" alt="">
                            </div>
                            <div class="recent-title">
                                <a href="{{URL::to('/service-detail/'.$ser->id)}}">{{$ser->service_title}}</a>
                                <p>{{ $ser->updated_at->format('d/m/Y   H:i:s') }}</p>
                            </div>
                        </div> 
                        @empty
                            
                        @endforelse
                       
                       
                        
                    </aside>
                  
                
                </div>
                <!-- Widget Area /- -->
            </div>
        </div>
        <!-- Container /- -->
    </div>
    <!-- End : Blog Page Content 
==================================================-->
    
@endsection