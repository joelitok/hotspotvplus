  <!-- Start: Header Section 
==================================================-->
<div class="header">
    <!--Start: Header Info -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 header_warper">
                <!-- Start : Logo -->
                <div class="header_top_left">
                    <div class="social-nav">
                        <ul class="header_socil list-inline pull-left">
                            <li>
                                <a href="{{URL::to('/contactez')}}"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="{{URL::to('/contactez')}}">
                                        <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/237652597112"><i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End: social-nav -->
                </div>
                <!-- End :   -->
                <div class="header_top_right list-unstyled">
                    <ul>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <span class="top-title">vecteur.plus@yahoo.fr</span>
                        </li>
                        <!-- End: Opening time -->
                        <li>
                            <i class="fa fa-phone"></i>
                            <span class="top-title">+237 6 75 75 94 82</span>
                        </li>
                        <!-- End: Opening time -->
                        <li>
                            <i class="fa fa-clock-o"></i>
                            <span class="top-title">Lundi-vendredi: 8:30 - 18:00</span>
                        </li>
                        <!-- End: Opening time -->

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Header Info -->

<!-- Start: header navigation -->
<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="repire_logo">
                    <a href="{{URL::to('/')}}"><img src="{{asset('frontend/images/logo.jpg')}}"  alt="Riamend"></a>
                
                </div>
                <div id="navigation">
                    <ul>
                        <li><a class="active" href="{{URL::to('/')}}">Accueil</a>
                        </li>
                      
                        <li><a class="btn btn-secondary" href="{{URL::to('/rent-a-wifi')}}" style="font-size:17px; color:rebeccapurple;font-weight: bold;">Louer un Mifi</a>
                        </li>
                        <li class="has-sub"><a href="{{URL::to('/solution-pro')}}" title="page">Solutions Pro</a>
                            <ul>
                                <li><a href="{{URL::to('/mifi-conference')}}" title="Gallery">Wifi pour conference</a>
                                </li>
                                <li><a href="{{URL::to('/internet-entreprise')}}" title="Gallery">Internet pour entreprise</a>
                                </li>
                                <li><a href="{{URL::to('/internet-domicile')}}" title="Gallery">Internet pour domicile</a>
                                </li>
                                <li><a href="{{URL::to('/services')}}" title="Services">Services</a></li>
                                
                            </ul>
                            </li>
                        </li>
                    
                        <li><a href="{{URL::to('/contactez')}}" title="Contact">Nous contactez</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
</div>