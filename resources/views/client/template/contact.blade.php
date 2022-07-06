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
                        <div class="mapouter">
                        <div class="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.6448145933964!2d9.739720114504223!3d4.092500239669598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610fdad44fd517%3A0x290342b61ca0ed12!2sVecteur%2B%20Technologies!5e0!3m2!1sfr!2scm!4v1657061383090!5m2!1sfr!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="500"></iframe>
                       </div>
                    </div>
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