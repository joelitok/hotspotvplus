<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<html lang="zxx">
<!--[if gt IE 8]> <!-->
<!--
<![endif]-->

<head>
    <!-- TITLE OF SITE -->
    <title>237services </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Pokpok - Repair HTML Template" />
    <meta name="keywords" content="Pokpok, Repair, one page, multipage, responsive, template" />
    <meta name="author" content="Pokpok">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" type="image/png" href="{{asset('frontend/images/logo1.jpg')}}">

    <!-- CSS Begins
================================================== -->
    <!--Animate Effect-->
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/hover.css')}}" rel="stylesheet">

    <!--Owl Carousel -->
    <link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet">

    <!-- For Image Preview -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

    <!--BootStrap -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/normalize.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

    {{-- start calendar --}}
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('frontend/daterange/daterangepicker.css')}}" />

    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    --}}
    <script src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.fr.min.js"></script>

    <script type="text/javascript" src="{{asset('frontend/daterange/daterangepicker.js')}}"></script>
     {{-- end calendar  --}}



    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
     
</head>

<body>
    {{-- @include('sweet::alert') --}}
    @include('sweetalert::alert')
    <!-- ::::::::::::::::::::::::::: Start: Preloader section ::::::::::::::::::::::::::: -->
    <div id="preloader"></div>
    <!-- ::::::::::::::::::::::::::: End: Preloader section ::::::::::::::::::::::::::: -->

@include('client.include.header')
<!-- End: header navigation -->
{{-- start body --}}

<section class="service_sec_two">
   <div class="container">
        <div class="base-header">
            <h2>Processus de Location</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="service_box_tw">
                    
                   <img src="{{asset('frontend/images/im1.png')}}" height="75px" width="75px" alt="">                     
                    <div class="service_cnt">
                        <a href="#">
                            <h3> Étape 1 : RÉSERVEZ EN LIGNE</h3>
                        </a>
                        <p>
                            Choisissez la durée de votre séjour, la ville de résidence et un forfait internet mensuel pour rester connecter 24h/24 et partout où vous allez !!!   </p>
                    </div>
                </div>
            </div>
            <!-- End: Service item -->
            <div class="col-md-6">
                <div class="service_box_tw">
                    <img src="{{asset('frontend/images/im2.png')}}" height="70px" width="70px" alt="">                     
                    <div class="service_cnt">
                        <a href="#">
                            <h3> Étape 2 : RECEVEZ VOTRE MODEM</h3>
                        </a>
                        <p>
                            Une fois la réservation effectuée, nous vous contactons soit par e-mail soit par WhatsApp, afin de prendre un rendez-vous pour vous remettre votre modem Wi-Fi portable. </p>
                    </div>
                </div>
            </div>
            
            <!-- End: Service item -->
            <div class="col-md-6">
                <div class="service_box_tw">
                    <img src="{{asset('frontend/images/im3.png')}}" height="75px" width="75px" alt="">                     
                    <div class="service_cnt">
                        <a href="#">
                            

                            <h3> Étape 3 : DEPOSEZ VOTRE CAUTION</h3>
                        </a>
                        <p>
                            Pour la location d’un modem wifi, vous devez versez une caution de 30.000 FCFA totalement remboursable a la remise du modem. 
                        </p>
                    </div>
                </div>
            </div>
            <!-- End: Service item -->
            <div class="col-md-6">
                <div class="service_box_tw">
                    <img src="{{asset('frontend/images/im4.png')}}" height="75px" width="75px" alt="">                     
                    <div class="service_cnt">
                        <a href="#">
                            <h3> Étape 4 : PROFITEZ D’INTERNET</h3>
                        </a>
                        <p>
                            Il suffit de mettre le modem en marche et vous disposez d’un réseau Wi-Fi personnalisé où vous pouvez jusqu’à 8 appareils. Simple rapide et efficace ! </p>
                    </div>
                </div>
            </div>
            <!-- End: Service item -->
            <div class="col-md-6">
                <div class="service_box_tw">                    
                    <div class="service_cnt">
                         <img src="{{asset('frontend/images/im5.png')}}" height="75px" width="75px" alt=""> 
                        <a href="#">
                            <h3> Étape 5 : RENDEZ LE MODEM</h3>
                        </a>
                        <p>
                             RECUPERER VOTRE CAUTION <br>
                           
                            Deux jours avant la fin de la durée de votre séjour nous reprenons un rendez-vous afin de récupérer l’appareil !
                            </p>
                    </div>
                </div>
            </div>
          
           
        </div>
        <!--/.row -->
    </div>
    <!--/.container -->
</section>

<section class="about_sec_2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="abut_title">
                  <img src="{{asset('frontend/images/modem.gif')}}" alt="" srcset="">
                </div>
            </div> 
            <div class="col-md-6">
                <!--  Contact Form  -->
                <div class="contact-form">
                    <div style="text-align: center">
                        <H2>
                            Complétez le formulaire pour louer un Mifi.
                        </H2>
                    </div>
                    <form method="post" action="{{ url('/order_add_save') }}"
                    enctype="multipart/form-data" id="contact-form">
                                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                             <div class="row">
                                 <div class="col-md-4">
                                    <label style="font-size:14px">Période:</label> 
                                 </div>
                                  <div class="col-md-8">
                                    <div class="form-group">
                                        <div class='input-group date'>
                                        <input type='text' class="form-control" name="period" id="period"/>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                    </div> 
                                 </div> 
                             </div>
                          
                                 
                            
                            </div>
                           

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Nom:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input class="form-control" name="order_name" id="name" type="text" placeholder="Nom">
                         
                                            </div>
                                            
                                        </div>
                                    </div>
                                           </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for=""> Email:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">

                                                <input class="form-control" name="order_email" id="email" type="email" placeholder="Email">
                               
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for=""> Contact <img src="{{asset('frontend/images/whatsapp1.png')}}"  height="30px" width="50px"> : </label>
                                        </div>
                                        <div class="col-md-8">
<div class="form-group">
    <input class="form-control" name="order_phone" id="phone" type="number" placeholder="Numéro de télephone">
                               
</div>
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
Ville :
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <select name="order_city" class="form-control">
                                                    @if($cities)
                                                    @foreach ($cities as $city)
               
                                                    <option>{{$city}} </option>
                                                    @endforeach  
                                                    @endif
                                                   </select>
                                            </div>
                                           
                                        </div>
                                    </div>
                                   
                                    
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for=""> Forfait:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <select name="order_forfait_name" class="form-control">
                                                    @if($exist==true)
                                                    @if($tariffs)
                                                    @foreach ($tariffs as $tarifItem)
                                                       @isset($tariff)
                                                       <option>{{$tariff->tariff_name}} </option>
                                                         @if($tariff->id!=$tarifItem->id)
                                                         <option>{{$tarifItem->tariff_name}} </option>
                                                         @endif
                                                        @endisset
                                                    @endforeach 
                                                    @endif
                                                    @else
                                                    @if($tariffs)
                                                   @foreach ($tariffs as $tarifItem)
                                                        <option>{{$tarifItem->tariff_name}} </option>
                                                   @endforeach 
                                                   @endif
                                                        
                                                    @endif
                                                    
                                                   
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Caution:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input class="form-control"  id="name" type="text" value="30000Fcfa (soit 45.8€)" disabled>
                
                                            </div>
                                            
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="col-md-12 mt-5" style="text-align: center">
                                <div class="submit-area">
                              <button type="button" id="submit-contact" class="btn-alt" data-toggle="modal" data-target="#exampleModal3{{$tarifItem->id}}">
                                soumettre
                              </button>
                            </div>
                        </div> 
                            </div>
                        </div>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal3{{$tarifItem->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">CAUTION DU MODEM</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                <div class="modal-body">
                                    <p style="text-align: center;font-size:20px"><b style="color: green;">Récapitulatif de votre commande :</b> </p>
                                    <p>Cette commande vous coutera <b> {{$tarifItem->tariff_price}} Fcfa </b>   en raison <b> 30 000 Fcfa</b>  pour la caution <b> (soit 45.8€)</b>  et par exemple  <b>15 000 Fcfa (soit 22.99€) </b> </p>
                                <p> NB: Cette caution est totalement remboursable a la remise du modem.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                  <input type="submit" id="submit-contact" class="btn btn-success" value="Soummettre">
                                </div>
                              </div>
                            </div>
                          </div>
                        {{-- end button submit--}}
                    </form>
                </div>
                <!-- End:Contact Form  -->
            </div>  
        </div>
        <!-- row /- -->
    </div>
    <!-- End: container-->

</section>
<!--  End: About Section
==================================================-->











<!-- Start: Call to action  Section 
==================================================-->
<section class="calltoaction_sec calltoaction_sec_tw">
    <div class="container">
        <div class="row">
            <div class="col-md-12 callto-pull-left">
                <div class="callto-text">
                    <h2>Nous contactez pour externaliser vos services Informatiques</h2>
                </div>
                <div class="callto-link">
                    <a href="{{URL::to('/contactez')}}" class="more-link">Contact</a>
                </div>
            </div>
        </div>
        <!--End: row-->
    </div>
    <!-- End: container-->
</section>
@include('client.include.footer')
<!-- End:Footer Section 
========================================-->


<!-- Scripts
========================================-->


{{-- start add calendar --}}
 <script type="text/javascript"> 
    $(function() {
      $('input[name="period"]').daterangepicker({
          autoUpdateInput: false,
          locale: {
            "format": "DD/MM/YYYY",
            "separator": " - ",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "daysOfWeek": ["Lun","Mar","Mer","Jeu","Ven","sam","Dim"],
            "monthNames": ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Jullet","Aout","Septembre","Octobre","Novembre","Decembre"],
             "firstDay": 1
            
          },});
    
      $('input[name="period"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));});
    
      $('input[name="period"]').on('cancel.daterangepicker', function(ev, picker) {$(this).val('');}); });
    </script> 
{{-- end add calendar --}}

<!-- plugins -->
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>

<!-- Custom Scripts
========================================-->
<script src="{{asset('frontend/js/main.js')}}"></script>


</body>

</html>