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
                                <a href=""><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-pinterest"></i></a>
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
                            <span class="top-title">info@example.com</span>
                        </li>
                        <!-- End: Opening time -->
                        <li>
                            <i class="fa fa-phone"></i>
                            <span class="top-title">+234 567 234 875</span>
                        </li>
                        <!-- End: Opening time -->
                        <li>
                            <i class="fa fa-clock-o"></i>
                            <span class="top-title">Mon-Fri: 8:00 - 16:00</span>
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
                    <a href="#"><img src="{{asset('frontend/images/logo.png')}}" alt="Riamend"></a>
                </div>
                <div id="navigation">
                    <ul>
                        <li><a class="active" href="{{URL::to('/')}}">Accueil</a>
                        </li>
                        <li><a class="active" href="{{URL::to('/services')}}">Services</a>
                        </li>
                        <li><a href="{{URL::to('/rent-a-wifi')}}" style="font-size:17px; color:rebeccapurple;font-weight: bold;">Louer un Mifi</a>
                        </li>
                        <li class="has-sub"><a href="{{URL::to('/solutions')}}" title="page">Solutions Pro</a>
                            <ul>
                                <li><a href="index-two.html" title="Home">Home Two</a>
                                <li><a href="gallery.html" title="Gallery">Wifi pour conference</a>
                                </li>
                                <li><a href="single-gallery.html" title="Gallery">Wifi pour entreprise</a>
                                </li>
                                <li><a href="services.html" title="Services">Services</a>
                                </li>
                                <li><a href="single-services.html" title="Services">sin</a>
                                </li>
                                <li><a href="team.html" title="Team">Team Page</a>
                                </li>
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