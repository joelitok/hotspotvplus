@extends('client.layouts.appClient')
@section('content')  
    <!-- Start: Contact  Section 
==================================================-->
<section class="contact-section contact_page">
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h2> Nous contactez </h2>
            <p>Vecteur+ technologies 
                Adresse : carrefour ippb bonamoussadi douala <br/>
              
                Téléphones : (+237) 6 75 75 94 82 / 655 838 884 <br/>
                Mail : vecteur.plus@yahoo.fr</p>
        </div>
        <!-- End:  heading -->
        <!--  Content  -->
        <div class="inner-contact">
            <div class="row">
                <div class="col-md-6">
                    <!--  Contact Form  -->
                    <div class="contact-form">
                        <form method="post" action="{{ url('/contactez') }}"
                        enctype="multipart/form-data" id="contact-form">
                        @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <input class="con-field" name="name" id="name" type="text" placeholder="Nom" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="con-field" name="email" id="email" type="text" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="con-field" name="subject" id="subject" type="text" placeholder="Sujet" required>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="con-field" name="message" id="message" rows="6" placeholder="Message" required></textarea>
                                        <div class="submit-area" style="text-align: center">
                                            <input type="submit" id="submit-contact" class="btn-alt" value="Envoyer">
                                            <div id="msg" class="message"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- End:Contact Form  -->
                </div>
                <div class="col-md-6">
                    <div id="map" class="map-container">
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=ippb%20bonamoussadi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
                    </div>
                </div>   
            </div>
            <!-- row /- -->
        </div>
        <!-- End:Content  -->
    </div>
    <!-- container /- -->
</section>
<!--End Contact Section
==================================================-->

@endsection