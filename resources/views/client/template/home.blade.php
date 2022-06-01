@extends('client.layouts.appClient')
@section('content')
<div class="slides_wrapper">
    <div class="slides__preload_wrapper">
        <div class="spinner"></div>
    </div>
    <div class="slider_home">
        <!-- Start: Slider 1  -->
        <div class="single_slider slide_bg_1">
            <div class="slider_item_tb">
                <div class="slider_item_tbcell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                {{-- <h5>Vecteur+ technologies</h5> --}}
                                <h2>Externalisation de vos services informatiques</h2>
                                
                                <div class="slider_btn">
                                    <a href="#quote" class="more-link slider_btn_one">commandez</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Slider 1  -->
        <!-- Start: Slider 2  -->
        <div class="single_slider slide_bg_2">
            <div class="slider_item_tb">
                <div class="slider_item_tbcell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                {{-- <h5>Vecteur+ technologies</h5> --}}
                                <h2>Externalisation de vos services informatiques</h2>
                                
                                <div class="slider_btn">
                                    <a href="#quote" class="more-link slider_btn_one">commandez</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Slider 2  -->
    </div>
</div>
<!-- End:  Slider
==================================================-->



<!-- Start: About  Section 
==================================================-->
<section class="about_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="abut_title">
                    <h2 style="text-align: center">  
                         Services Informatiques 
                        </h2>
                        <p style="text-align: center"> Offre de service</p>
                     <div class="about_list_itm">
                        <ul>
                            <li>Vous êtes une entreprise, une association. </li>
                            <li>Vous ne disposez pas d’un service informatique interne. </li>
                            <li>Vous en offrir un, est coûteux ! </li>
                            <li>Alors externalisez votre service informatique ! </li>
                            <li>Confiez  la  résolution  de  vos  problèmes  informatique à  vecteur+ technologies </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_box">
                    <img src="{{asset('frontend/images/about.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <!-- End: row-->
    </div>
    <!-- End: container-->
</section>
<!--  End: About Section
==================================================-->


<!-- Start: Service Section 
==================================================-->
<section class="service_section">
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h2> Nos services informatiques</h2>
            <p>VECTEUR+ TECHNOLOGIES 
                Est une entreprise de services informatiques et télécoms. 
                Spécialisée dans les réseaux LAN, WAN, WIFI ET FIBRE OPTIQUE, l’entreprise héberge aussi les 
                serveurs de messageries et les sites web.</p>
        </div>
        <!-- End:  heading -->
        <div class="row">
            <div class="owl-carousel owl-theme col-md-12" id="servic">
                <div class="serv_list">
                    <div class="service_img">
                        <img alt="team" class="img-responsive" src="{{asset('frontend/images/service1.jpg')}}">
                    </div>
                    <div class="service_para">
                        <a href="services.html">
                            <h3>network services</h3>
                        </a>
                        <p>Attended no do thoughts meonof after suade sca rcely own are pret to spring diss auade scarcely own are </p>
                        <a class="serv_read" href="services.html">read  more</a>
                    </div>
                </div>
                <!--/Item -->
                <div class="serv_list">
                    <div class="service_img">
                        <img alt="team" class="img-responsive" src="{{asset('frontend/images/service2.jpg')}}">
                    </div>
                    <div class="service_para">
                        <a href="services.html">
                            <h3>Apple services</h3>
                        </a>
                        <p>Attended no do thoughts meonof after suade sca rcely own are pret to spring diss auade scarcely own are </p>
                        <a class="serv_read" href="services.html">read  more</a>
                    </div>
                </div>
                <!--/Item -->
                <div class="serv_list">
                    <div class="service_img">
                        <img alt="team" class="img-responsive" src="{{asset('frontend/images/service3.jpg')}}">
                    </div>
                    <div class="service_para">
                        <a href="services.html">
                            <h3>laptop service</h3>
                        </a>
                        <p>Attended no do thoughts meonof after suade sca rcely own are pret to spring diss auade scarcely own are </p>
                        <a class="serv_read" href="services.html">read  more</a>
                    </div>
                </div>
                <div class="serv_list">
                    <div class="service_img">
                        <img alt="team" class="img-responsive" src="{{asset('frontend/images/service1.jpg')}}">
                    </div>
                    <div class="service_para">
                        <a href="services.html">
                            <h3>mobile service</h3>
                        </a>
                        <p>Attended no do thoughts meonof after suade sca rcely own are pret to spring diss auade scarcely own are </p>
                        <a class="serv_read" href="services.html">read  more</a>
                    </div>
                </div>
                <!--/Item -->
            </div>
        </div>
        <!---/.row -->
    </div>
    <!--/.container -->
</section>
<!-- End: Service Section 
==================================================-->



<!-- Start: Call to action  Section 
==================================================-->
<section class="calltoaction_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 callto-pull-left">
                <div class="callto-text">
                    <h2>We're here to help your computer repair service</h2>
                    <p>We're here to help you manage your problem regular emails that will arm </p>
                </div>
                <div class="callto-link">
                    <span> +47 377 488 289</span>
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



<!-- Start: Team Section 
==================================================-->
<section class="team_section">
    
    <!-- End: container-->
</section>
<!--  End: Team Section
==================================================-->



<!-- Start: Why Choose Section 
==================================================-->
<section class="why_choose_sec">
    <div class="container">
        <div class="row">
            <div class="why_choose_wrp">
                <div class="why_single_image">
                    <img src="{{asset('frontend/images/why_ch.jpg')}}" alt="">
                </div>
                <!--End: Image-->
                <div class="why_choose_content">
                    <div class="base-header">
                        <h2> Why Choose Us </h2>
                    </div>
                    <div class="why_chos_warp">
                        <div class="chooseus-content">
                            <div class="chooseus_icon">
                                <i class="icon-glyph-104"></i>
                            </div>
                            <h3>Quick Response </h3>
                            <p>Emergency response time is one hour or less guaranteed at live person will answer your call or you can enter service</p>
                        </div>
                    </div>
                    <div class="why_chos_warp">
                        <div class="chooseus-content">
                            <div class="chooseus_icon">
                                <i class="icon-glyph-70"></i>
                            </div>
                            <h3>Very Fast Services</h3>
                            <p>Emergency response time is one hour or less guaranteed at live person will answer your call or you can enter service</p>
                        </div>
                    </div>
                </div>
                <!--End: List-->
            </div>
        </div>
        <!--End: row-->
    </div>
    <!-- End: container-->
</section>
<!--  End: Why Choose  Section
==================================================-->



<!-- Start: Pricing Section 
==================================================-->
<section class="pricing-section" id="pricing">
    <!-- container -->
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h2>Our Special Plan</h2>
            <p>Service features tended no do thoughts me on dissuade scarcely own are pretty spring suffer old denote his proposal speedily amr striking am now .</p>
        </div>
        <!-- End:  heading -->
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <!-- Start: pricing-box 1 -->
                <div class="pricing-box">
                    <div class="pricing_heading">
                        <h3>Basic plan</h3>
                        <h2><span>$</span>40.00</h2>
                    </div>
                    <ul>
                        <li> <i class="icon_box-checked"></i>One-time Repair</li>
                        <li><i class="icon_box-checked"></i> Regular Repair</li>
                        <li> <i class="icon_box-checked"></i>Move-ins / Outs</li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="more-link">order now</a>
                    </div>
                </div>
                <!-- End: pricing-box 1 -->
            </div>
            <div class="col-md-4 col-xs-12">
                <!-- Start: pricing-box 1 -->
                <div class="pricing-box">
                    <div class="pricing_heading">
                        <h3>Repair plan</h3>
                        <h2><span>$</span>70.00</h2>
                    </div>
                    <ul>
                        <li> <i class="icon_box-checked"></i>One-time Repair</li>
                        <li><i class="icon_box-checked"></i> Regular Repair</li>
                        <li> <i class="icon_box-checked"></i>Move-ins / Outs</li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="more-link">order now</a>
                    </div>
                </div>
                <!-- End: pricing-box 1 -->
            </div>
            <div class="col-md-4 col-xs-12">
                <!-- Start: pricing-box 1 -->
                <div class="pricing-box">
                    <div class="pricing_heading">
                        <h3>Install plan</h3>
                        <h2><span>$</span>90.00</h2>
                    </div>
                    <ul>
                        <li> <i class="icon_box-checked"></i>One-time Repair</li>
                        <li><i class="icon_box-checked"></i> Regular Repair</li>
                        <li> <i class="icon_box-checked"></i>Move-ins / Outs</li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="more-link">order now</a>
                    </div>
                </div>
                <!-- End: pricing-box 1 -->
            </div>
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
</section>
<!--End: Pricing Section 
==================================================-->

<!--  Start: Blog Section 
==================================================-->
<section class="blog-section">
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h2> Latest News </h2>
            <p>Service features tended no do thoughts me on dissuade scarcely own are pretty spring suffer old denote his proposal speedily amr striking am now .</p>
        </div>
        <!-- End:  heading -->
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="blog-warp-1 blog_warp_lay_1">
                    <div class="blog_imgg">
                        <img src="{{asset('frontend/images/blog_1.jpg')}}" alt="" />
                        <div class="publisd-date"> <i class="arrow_right"></i> </div>
                        <a href="#" class="btag"><i class="fa fa-tag"></i>office </a>
                    </div>
                    <div class="blog_content_warp">
                        <div class="blog_date_athor">
                            <span><a href="">0 comments</a></span>
                            <span class="blog_post_date">Jul 31, 2017</span>
                        </div>
                        <h3><a href="blog.html">Most small businesses can’t recover from cyber breaches</a></h3>
                    </div>
                </div>
            </div>
            <!--/ Blog Item 1 -->
            <div class="col-md-4 col-xs-12">
                <div class="blog-warp-1 blog_warp_lay_1">
                    <div class="blog_imgg">
                        <img src="{{asset('frontend/images/blog_2.jpg')}}" alt="" />
                        <div class="publisd-date"> <i class="arrow_right"></i> </div>
                        <a href="#" class="btag"><i class="fa fa-tag"></i>house </a>

                    </div>
                    <div class="blog_content_warp">
                        <div class="blog_date_athor">
                            <span><a href="">0 comments</a></span>
                            <span class="blog_post_date">Jul 31, 2017</span>
                        </div>
                        <h3><a href="blog.html">Hacker requests for wire to transfers are topping a email</a></h3>
                    </div>
                </div>
            </div>
            <!--/ Blog Item 2 -->
            <div class="col-md-4 col-xs-12">
                <div class="blog-warp-1 blog_warp_lay_1">
                    <div class="blog_imgg">
                        <img src="{{asset('frontend/images/blog_3.jpg')}}" alt="" />
                        <div class="publisd-date"> <i class="arrow_right"></i> </div>
                        <a href="#" class="btag"><i class="fa fa-tag"></i>clean </a>
                    </div>
                    <div class="blog_content_warp">
                        <div class="blog_date_athor">
                            <span><a href="">0 comments</a></span>
                            <span class="blog_post_date">Jul 31, 2017</span>
                        </div>
                        <h3><a href="blog.html">Vulnerability found in major manufacturer android phone</a></h3>
                    </div>
                </div>
            </div>
            <!--/ Blog Item 3 -->
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
</section>
<!--   End: Blog Section  
==================================================-->


<!-- Start: Client Section
==================================================-->
<div class="client-section" id="client-section">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <!-- client list  -->
            <div class="owl-carousel owl-theme col-md-12" id="client">
                <!-- client 1 -->
                <div class="item row">
                    <div class="col-md-12">
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-1.png')}}">
                        </div>
                    </div>
                </div>
                <!-- client 2 -->
                <div class="item row">
                    <div class="col-md-12">
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-2.png')}}">
                        </div>
                    </div>
                </div>
                <!-- client 3 -->
                <div class="item row">
                    <div class="col-md-12">
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-3.png')}}">
                        </div>
                    </div>
                </div>
                <!-- client 4 -->
                <div class="item row">
                    <div class="col-md-12">
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-4.png')}}">
                        </div>
                    </div>
                </div>
                <!-- client 5 -->
                <div class="item row">
                    <div class="col-md-12">
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-5.png')}}">
                        </div>
                    </div>
                </div>
                <!-- client 6 -->
                <div class="item row">
                    <div class="col-md-12">
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-6.png')}}">
                        </div>
                    </div>
                </div>
                <!-- client 7 -->
                <div class="item row">
                    <div class="col-md-12">
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-4.png')}}">
                        </div>
                    </div>
                </div>
            </div>
            <!--/ client list  -->
        </div>
        <!--/ row - -->
    </div>
    <!--/ Container - -->
</div>
<!--   End:Client Section
==================================================-->
@endsection