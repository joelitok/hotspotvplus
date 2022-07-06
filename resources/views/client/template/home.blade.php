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
                                    <h5>Votre pocket wifi</h5>
                                    <h2> Louer votre wifi </h2>
                                     <p> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Tel : (+237) 6 55 83 88 84 </p>
                                    <div class="slider_btn">
                                        <a href="{{URL::to('/rent-a-wifi')}}" class="more-link slider_btn_one">louer un wifi</a>
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
                                    <h2> Restez connecter partout au cameroun pendant votre séjour </h2>
                                    <p> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Tel : (+237) 6 55 83 88 84 </p>
                                    <div class="slider_btn">
                                        <a href="{{URL::to('/rent-a-wifi')}}" class="more-link slider_btn_one">louer un wifi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider slide_bg_3">
                <div class="slider_item_tb">
                    <div class="slider_item_tbcell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="slider_btn">
                                        <a href="{{URL::to('/rent-a-wifi')}}" class="more-link slider_btn_one">louer un wifi</a>
                                    </div>
                                    <h5>Votre pocket wifi</h5>
                                    <h2> Restez connecter partout au cameroun pendant votre séjour </h2>
                                    <p> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Tel : (+237) 6 55 83 88 84 </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider slide_bg_4">
                <div class="slider_item_tb">
                    <div class="slider_item_tbcell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                   
                                    <h5>Votre pocket wifi</h5>
                                    <h2> Restez connecter partout au cameroun pendant votre séjour </h2>
                                    <p> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Tel : (+237) 6 55 83 88 84 </p>
                                    <div class="slider_btn">
                                        <a href="{{URL::to('/rent-a-wifi')}}" class="more-link slider_btn_one">louer un wifi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
 














<!-- Start: Pricing Section 
==================================================-->
<section class="pricing-section" id="pricing">
    <!-- container -->
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h2>Nos plans Spéciaux </h2>
            <p>Bénéficiez de notre plan spécial: <br>
            Versez un caution totalement remboursable et choisissez un plan pour restez connecter 24h/7 partout au Cameroun</p>
        </div>
        <!-- End:  heading -->
        <div class="row">

            @forelse ($tariffs as $tariff)
            <div class="col-md-4 col-xs-12">
                <!-- Start: pricing-box 1 -->
                <div class="pricing-box">
                    <div class="pricing_heading">
                        <h3>{{\Illuminate\Support\Str::ucfirst($tariff->tariff_name)}}</h3>
                        <h2>{{$tariff->tariff_price}}<span>Fcfa</span></h2>
                    </div>
                    <ul>
                        <li> Data: &nbsp; {{$tariff->tariff_data}}</li>
                        <li>Débit:&nbsp; {{$tariff->tariff_debit}}</li>
                        <li> Valable:&nbsp; {{$tariff->tariff_periode}}</li>
                    </ul>
                    <div class="text-center">
                        <a href="{{ url('/rent-a-wifi/'.$tariff->id)}}" class="more-link">commandez</a>
                    </div>
                </div>
                <!-- End: pricing-box 1 -->
            </div>
            @empty
            <div class="col-md-12 col-xs-12 justify-content-center">
                <p style="text-align: center"> 
                    <H1> Aucun tarrif disponible</H1>
                </p>
                
            </div>
            @endforelse
           
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
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-1.jpg')}}">
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
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-3.jpg')}}">
                        </div>
                    </div>
                </div>
                <!-- client 4 -->
                <div class="item row">
                    <div class="col-md-12">
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-4.jpg')}}">
                        </div>
                    </div>
                </div>
                <!-- client 5 -->
                <div class="item row">
                    <div class="col-md-12">
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-5.jpg')}}">
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
                        <div class="client-box"><img alt="client" src="{{asset('frontend/images/client-4.jpg')}}">
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
<!-- plugins -->
<script type="text/javascript">
    var vsid = "kc24382a0c1c9b4";
    (function() { 
    var vsjs = document.createElement('script'); vsjs.type = 'text/javascript'; vsjs.async = true; vsjs.setAttribute('defer', 'defer');
     vsjs.src = 'https://www.leadchatbot.com/vsa/chat.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(vsjs, s);
    })();
</script>
@endsection