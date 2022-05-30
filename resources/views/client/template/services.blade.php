@extends('client.layouts.appClient')
@section('content')
 <!-- Start: Service Section 
==================================================-->
<section class="service_section">
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h2> Our Services</h2>
            <p>Service features tended no do thoughts me on dissuade scarcely own are pretty spring suffer old denote his proposal speedily amr striking am now .</p>
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


   <!-- Start: Pricing Section 
==================================================-->
<section class="pricing-section pricing_serv_pg">
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


@endsection