<footer class="footer-section">
    <div class="container">
        <div class="row">
            <!-- Start: About -->
            <div class="col-md-3 col-xs-12">
                <div class="widget">
                    <h5 href="{{URL::to('/apropos')}}">A propos </h5>
                    <p class="footer_para" href="{{URL::to('/apropos')}}">
                        <p>VECTEUR+ TECHNOLOGIES</p> 
                        Est une entreprise de services informatiques et télécoms.
                    <p>Spécialisée dans les réseaux LAN, WAN, WIFI ET FIBRE OPTIQUE, l’entreprise héberge aussi les 
                        serveurs de messageries et les sites web.</p>
                    </p>
                    
                </div>
            </div>
            <!-- End: About -->
            <!-- Start: Helpful Link -->
            <div class="col-md-3 col-xs-12">
                <div class="widget">
                    <h5>Logo </h5>
                    <ul class="recent-post helpful_post">
                        <li>
                            <h6><a href="#">Logo</a></h6>
                            <img src="{{asset('frontend/images/logo.jpg')}}">
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End: Helpful Link -->

            <!-- Start: Latest post -->
            <div class="col-md-3 col-xs-12">
                <div class="widget">
                    <h5>Menu</h5>
                    <ul class="recent-post">
                        <li>
                            <h6><a href="{{URL::to('/')}}">Accueil</a></h6>
                        </li>
                        
                        <li>
                            <h6><a href="{{URL::to('/rent-a-wifi')}}">Louer un mifi</a></h6>
                        </li>
                        <li>
                            <h6><a href="{{URL::to('/solutions')}}">Solutions Pro</a></h6>
                        </li>
                        <li>
                            <h6><a href="{{URL::to('/contactez')}}">Contact</a></h6>
                        </li>
                        <li>
                            <h6><a href="{{URL::to('/login')}}">Logo</a></h6>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!-- End: Latest post -->
            <!-- Start: CONTACT INFO -->
            <div class="col-md-3 col-xs-12">
                <div class="widget">
                    <h5>Contact</h5>
                    <!-- Contact -->
                    <ul class="recent-post foot_contact_wid">
                        <li>
                            <h6><a href="#">VECTEUR+ Techonologies</a></h6>
                        </li>
                        <li>
                            <h6><a href="#">Adresse : Carrefour IPPB BONAMOUSSADI DOUALA</a></h6>
                        </li>
                        <li>
                            <h6><a href="#">Tel : (+237) 6 75 75 94 82</a> <img src="{{asset('frontend/images/whatsapp.png')}}"  height="30px" width="30px"></h6>
                        </li>
                        <li>
                            <h6><a href="#">Tel : (+237) 6 55 83 88 84</a></h6>
                        </li>
                        <li>
                            <h6><a href="#">Heures : Lundi-vendredi: 8h30-18h</a></h6>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End: CONTACT INFO -->
            <!-- Start:Subfooter -->
            <div class="subfooter">
                <div class="row">
                    <div class="col-md-11 col-xs-10">
                        <div class="copyright_text">@copyRight 2022 <a href="">VECTEUR+ Techonologies</a>
                        </div>
                    </div>
                    <div class="col-md-1 col-xs-2">
                        <a class="scrollup" href="#"></a>
                    </div>
                </div>
            </div>
            <!-- End:Subfooter -->
        </div>
    </div>
</footer>
