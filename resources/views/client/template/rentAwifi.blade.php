@extends('client.layouts.appClient')
@section('content')
    <!-- Start: About Section 
==================================================-->
<!-- Start: Service Section 
==================================================-->
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
                            Une fois la réservation effectuée, nous contactons soit par e-mail soit par WhatsApp, afin de prendre un rendez-vous pour vous remettre votre modem Wi-Fi portable. </p>
                    </div>
                </div>
            </div>
            <!-- End: Service item -->
            <div class="col-md-6">
                <div class="service_box_tw">
                    <img src="{{asset('frontend/images/im3.png')}}" height="75px" width="75px" alt="">                     
                    <div class="service_cnt">
                        <a href="#">
                            <h3> Étape 3 : PROFITEZ D’INTERNET</h3>
                        </a>
                        <p>
                            Il suffit de mettre le modem en marche et vous disposez d’un réseau Wi-Fi personnalisé où vous pouvez jusqu’à 8 appareils. Simple rapide et efficace ! </p>
                    </div>
                </div>
            </div>
            <!-- End: Service item -->
            <div class="col-md-6">
                <div class="service_box_tw">
                    <img src="{{asset('frontend/images/im4.png')}}" height="75px" width="75px" alt="">                     
                    <div class="service_cnt">
                        <a href="#">
                            <h3> Étape 4 : RETOURNEZ DE MODEM</h3>
                        </a>
                        <p>
                            Deux jours avant la fin de la durée de votre séjour nous reprenons un rendez-vous afin de récupérer l’appareil !  </p>
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
                    <form method="post" action="{{ url('/order_add_save') }}"
                                        enctype="multipart/form-data" id="contact-form">
                                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label style="font-size:14px">DATE DE DEBUT</label>  
                                    </div>
                                    <div class="col-md-8">
                                        <input class="con-field" name="dateStart"  type="date" placeholder="Date de début">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                             <div class="row">
                                 <div class="col-md-4">
                                    <label style="font-size:14px">DATE DE FIN</label> 
                                 </div>
                                 <div class="col-md-8">
                                    <input class="con-field" name="dateEnd"  type="date" placeholder="Date de fin">
                             
                                 </div>
                             </div>
                          
                                 
                            
                            </div>
                           

                                <div class="col-md-12">
                                    <input class="con-field" name="order_name" id="name" type="text" placeholder="Nom">
                                </div>
                                <div class="col-md-12">
                                    <input class="con-field" name="order_email" id="email"-md-4 type="text" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <input class="con-field" name="order_phone" id="phone" type="text" placeholder="Numéro de télephone">
                                </div>
                                <div class="col-md-12">
                                    <select name="order_forfait_name" class="con-field">
                                    
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
                                 <div class="col-md-12">
                                    <select name="order_city" class="con-field" >
                                     @if($cities)
                                     @foreach ($cities as $city)

                                     <option>{{$city}} </option>
                                     @endforeach  
                                     @endif
                                    </select>
                                    
                                </div>
                             <div class="col-md-12" style="text-align: center">
                                    <div class="submit-area">
                                        <input type="submit" id="submit-contact" class="btn-alt" value="Soummettre">
                                        <div id="msg" class="message"></div>
                                    </div>
                                </div> 
                            </div>
                        </div>

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
<!--  End: Call to action  Section
==================================================-->


@endsection
