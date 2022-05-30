@extends('client.layouts.appClient')
@section('content')
    <!-- Start: About Section 
==================================================-->
<section class="about_sec_2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">    
                <div class="abut_title">
                    <h2>We're here to help you mobile repair service</h2>
                    <p>Attended no do thoughts me on dissuade scarcely own are prettyot spring suffer old denote his budy proposal speedily mr striking amto nut attention   tended no do after thoughts me on dissuade scarcely own are prettyot spring suffer old denote his budy proposal speedily mr striking amto nut attention ctttended no do thoughts me on  </p>
                    <div class="about_list_itm">
                        <ul>
                            <li>Unlimited over the phone assistance</li>
                            <li>Hard drive defragmentation</li>
                            <li>Refurbished Technology Sales</li>
                            <li>Computer Technology Sales</li> 
                        </ul>
                        <ul>
                            <li>Full year antivirus program ezyrepair</li>
                            <li>Unlimited over the phone assistance</li>
                            <li>Parts available depending on the</li>
                            <li>Laptop depending on the</li> 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                 <div class="contact-form">
                    <form method="post" action="mailer.php" id="contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <input class="con-field" name="name" id="name" type="text" placeholder="Name">
                                </div>
                                <div class="col-md-12">
                                    <input class="con-field" name="email" id="email" type="text" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <input class="con-field" name="messageForm" id="messageForm" type="text" placeholder="Interest of service">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="con-field" name="message" id="message" rows="6" placeholder="Your Message"></textarea>
                                    <div class="submit-area">
                                        <input type="submit" id="submit-contact" class="btn-alt" value="Send quote">
                                        <div id="msg" class="message"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- End: container-->
</section>
<!--  End: About Section
==================================================-->



<!-- Start: Why Choose Section 
==================================================-->
<section class="why_choose_two">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <div class="wy_ch_img">
                    <img src="{{asset('frontend/images/why.jpg')}}" alt="">    
                </div>
            </div>
            <div class="col-md-7 col-xs-12">
                <div class="base-header base_header_two">
                    <h2> Why Choose Us </h2>
                </div>
                <div class="why_chos_warp">  
                    <div class="chooseus-content">
                        <div class="chooseus_icon">
                            <i class="icon-glyph-226"></i>
                        </div>
                        <h3>Quick response </h3>
                        <p>Emergency response time is one hour or less guaranteed at live person will answer your call or you can enter service</p>
                    </div>
                    <div class="chooseus-content">
                        <div class="chooseus_icon">
                            <i class="icon-glyph-52"></i>
                        </div>
                        <h3>Quick response </h3>
                        <p>Emergency response time is one hour or less guaranteed at live person will answer your call or you can enter service</p>
                    </div>
                    <div class="chooseus-content">
                        <div class="chooseus_icon">
                            <i class="icon-glyph-142"></i>
                        </div>
                        <h3>Quick response </h3>
                        <p>Emergency response time is one hour or less guaranteed at live person will answer your call or you can enter service</p>
                    </div>
                </div>
            </div>
        </div>
        <!--End: row-->
    </div>
    <!-- End: container-->
</section>
<!--  End: Why Choose Section
==================================================-->



<!-- Start: Call to action  Section 
==================================================-->
<section class="calltoaction_sec calltoaction_sec_tw">
    <div class="container">
        <div class="row">
            <div class="col-md-12 callto-pull-left">
                <div class="callto-text">
                    <h2> We're here to help you manage your problem regular emails that will arm</h2>
                </div>
                <div class="callto-link">
                    <a href="" class="more-link">Send Request </a>
                </div>
            </div>
        </div>
        <!--End: row-->
    </div>
    <!-- End: container-->
</section>
<!--  End: Call to action  Section
==================================================-->



<!-- Start: Service Section 
==================================================-->
<section class="service_sec_two">
    <div class="container">
        <div class="base-header">
            <h2>Our service</h2>
            <p>Service features tended no do thoughts me on dissuade scarcely own are pretty spring suffer old denote his proposal speedily amr striking am now .</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service_box_tw">
                    <span class="icon-glyph-160"></span>                      
                    <div class="service_cnt">
                        <a href="#">
                            <h3> Mobile Service</h3>
                        </a>
                        <p>
                            Atte nded no do tho utstoa ta meon pretto is uade scar toa taday cely own are prettot
                        </p>
                    </div>
                </div>
            </div>
            <!-- End: Service item -->
            <div class="col-md-4">
                <div class="service_box_tw">
                    <span class="icon-glyph-252"></span>                      
                    <div class="service_cnt">
                        <a href="#">
                            <h3> Computer Service</h3>
                        </a>
                        <p>
                            Atte nded no do tho utstoa ta meon pretto is uade scar toa taday cely own are prettot
                        </p>
                    </div>
                </div>
            </div>
            <!-- End: Service item -->
            <div class="col-md-4">
                <div class="service_box_tw">
                    <span class="icon-glyph-178"></span>                      
                    <div class="service_cnt">
                        <a href="#">
                            <h3> Television Service</h3>
                        </a>
                        <p>
                            Atte nded no do tho utstoa ta meon pretto is uade scar toa taday cely own are prettot
                        </p>
                    </div>
                </div>
            </div>
            <!-- End: Service item -->
            <div class="col-md-4">
                <div class="service_box_tw">
                    <span class="icon-glyph-117"></span>                      
                    <div class="service_cnt">
                        <a href="#">
                            <h3> Desktop Service</h3>
                        </a>
                        <p>
                            Atte nded no do tho utstoa ta meon pretto is uade scar toa taday cely own are prettot
                        </p>
                    </div>
                </div>
            </div>
            <!-- End: Service item -->
            <div class="col-md-4">
                <div class="service_box_tw">
                    <span class="icon-glyph-118"></span>                      
                    <div class="service_cnt">
                        <a href="#">
                            <h3> Notebook Service</h3>
                        </a>
                        <p>
                            Atte nded no do tho utstoa ta meon pretto is uade scar toa taday cely own are prettot
                        </p>
                    </div>
                </div>
            </div>
            <!-- End: Service item -->
            <div class="col-md-4">
                <div class="service_box_tw">
                    <span class="icon-glyph-160"></span>                      
                    <div class="service_cnt">
                        <a href="#">
                            <h3> Phone Service</h3>
                        </a>
                        <p>
                            Atte nded no do tho utstoa ta meon pretto is uade scar toa taday cely own are prettot
                        </p>
                    </div>
                </div>
            </div>
            <!-- End: Service item -->
        </div>
        <!--/.row -->
    </div>
    <!--/.container -->
</section>

<!-- End: Service Section 
==================================================-->


<!-- Start: Work Section 
==================================================-->
<section class="work-section work_sce_two">
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h2> Repair Work</h2>
            <p>Service features tended no do thoughts me on dissuade scarcely own are pretty spring suffer old denote his proposal speedily amr striking am now .</p>
        </div>
        <!-- End:  heading -->
            <!-- Start: Work filter -->
        <ul class="projects-titles">
            <li class="active" data-filter="*"><span>all work</span>
            </li>
            <li data-filter=".web"><span>Laptop</span>
            </li>
            <li data-filter=".design"><span>Desktop</span>
            </li>
            <li data-filter=".graphics"><span>Mobile</span>
            </li>
            <li data-filter=".photoshop"><span>others</span>
            </li>
        </ul>
        <!-- End: Work filter -->
        <div class="row projects-list">
            <div class="col-md-4 col-xs-12 web graphics">
                <div class="single-project-item">
                    <div class="project-hover">
                        <a class="project-link" href="{{asset('frontend/images/work_1.jpg')}}"><i class="icon-glyph-17"></i></a>
                    </div>
                    <h6><a href="gallery.html">Laptop repair</a></h6>
                </div>
            </div>
            <!-- End: Work Item 1 -->
            <div class="col-md-4 col-xs-12 development photoshop">
                <div class="single-project-item project-bg-2">
                    <div class="project-hover">
                        <a class="project-link" href="{{asset('frontend/images/work_2.jpg')}}"><i class="icon-glyph-17"></i></a>
                    </div>
                    <h6><a href="gallery.html">Desktop repair</a></h6>
                </div>
            </div>
            <!-- End: Work Item 2 -->
            <div class="col-md-4 col-xs-12 web design">
                <div class="single-project-item project-bg-3">
                    <div class="project-hover">
                        <a class="project-link" href="{{asset('frontend/images/work_3.jpg')}}"><i class="icon-glyph-17"></i></a>
                    </div>
                    <h6><a href="gallery.html">Mobile repair</a></h6>
                </div>
            </div>
            <!-- End: Work Item 3 -->
            <div class="col-md-4 col-xs-12 design web development">
                <div class="single-project-item project-bg-4">
                    <div class="project-hover">
                        <a class="project-link" href="{{asset('frontend/images/work_4.jpg')}}"><i class="icon-glyph-17"></i></a>
                    </div>
                    <h6><a href="gallery.html">Phone repair</a></h6>
                </div>
            </div>
            <!-- End: Work Item 4 -->
            <div class="col-md-4 col-xs-12 web graphics">
                <div class="single-project-item project-bg-5">
                    <div class="project-hover">
                        <a class="project-link" href="{{asset('frontend/images/work_5.jpg')}}"><i class="icon-glyph-17"></i></a>
                    </div>
                    <h6><a href="gallery.html">Monitor repair</a></h6>
                </div>
            </div>
            <!-- End: Work Item 5 -->
            <div class="col-md-4 col-xs-12 design development web">
                <div class="single-project-item project-bg-6">
                    <div class="project-hover">
                        <a class="project-link" href="{{asset('frontend/images/work_6.jpg')}}"><i class="icon-glyph-17"></i></a>
                    </div>
                    <h6><a href="gallery.html">Mobile repair</a></h6>
                </div>
            </div>
            <!-- End: Work Item 6 -->
        </div>   
    </div>
</section>
<!-- End: Work Section 
==================================================-->


@endsection
