@extends('client.layouts.appClient')
@section('content')
<div class="slides_wrapper">
    <div class="slides__preload_wrapper">
        <div class="spinner"></div>
    </div>
     {{-- <div class="slider_home">
     @if($sliders)
     @forelse ($sliders as $slider)
        <div class="single_slider" slide_bg_2>
            <div class="slider_item_tb" style="background:url('/slider_images/{{$slider->slider_image}}')">
                <div class="slider_item_tbcell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <h2>{{$slider->slider_title}}</h2>
                                <div class="slider_btn">
                                    <a href="#quote" class="more-link slider_btn_one">Louer un wifi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         
     @empty
         <h2>vide vide vide</h2>
     @endforelse
         
     @endif
       
    </div>
</div>
<!-- End:  Slider
==================================================-->  --}}
 <div class="slider_home">
        <!-- Start: Slider 1  -->
            <div class="single_slider slide_bg_1">
                <div class="slider_item_tb">
                    <div class="slider_item_tbcell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <h5>Votre pocket wifi</h5>
                                    <h2> Louer votre wifi </h2>
                                     <p> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Tel : (+237) 6 55 83 88 84 </p>
                                    <div class="slider_btn">
                                        <a href="#quote" class="more-link slider_btn_one">louer un wifi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider slide_bg_2">
                <div class="slider_item_tb">
                    <div class="slider_item_tbcell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <h5>Votre pocket wifi</h5>
                                    <h2> Restez connecter partout au cameroun 24h/24 </h2>
                                    <p> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Tel : (+237) 6 55 83 88 84 </p>
                                    <div class="slider_btn">
                                        <a href="#quote" class="more-link slider_btn_one">louer un wifi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
 









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