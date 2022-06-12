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
                            <h6><a href="{{URL::to('/contactez')}}">Contact</a> </h6>
                        </li>
                        <li>
                            <h6>  <button class="btn btn-outline-primary mb-4" data-toggle="modal" data-target="#exampleModal">
                                Log in
                            </button></h6>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!-- End: Latest post -->










{{-- start modal --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
           
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div style="text-align: center">
                <img src="{{asset('backend/images/logo1.jpg')}}" height="100px" width="100px">
            </div>
            <form action="{{url('/admin/signin_account')}}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                  
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input class="form-control" maxlength="25" type="text"
                                    name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-11">
                                <input type="password" 
                                    name="password" id="password" class="form-control"/>  
                            </div>
                            <div class="col-lg-1">
                                <span style="color: black" class="fa fa-eye-slash" 
                                    id="togglePassword"></span>  
                            </div>
                        </div>
                    </div>

                    <div class="form-group row" style="text-align: center">
                        
                        <div class="col-lg-12">
                            <input type="submit" value="Envoyer" class="btn btn-success">
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>
</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', () => {

        // Toggle the type attribute using
        // getAttribure() method
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
              password.setAttribute('type', type);

        // Toggle the eye and bi-eye icon
        this.classList.toggle('fa-eye');
    });
</script>




  <!-- Button to Open the Modal -->

  


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
