@extends('client.layouts.appClient')
@section('content')  
    <!-- Start: Contact  Section 
==================================================-->
<section class="contact-section contact_page">
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h2> Get in touch </h2>
            <p>Service features tended no do thoughts me on dissuade scarcely own are pretty spring suffer old denote his proposal speedily amr striking am now .</p>
        </div>
        <!-- End:  heading -->
        <!--  Content  -->
        <div class="inner-contact">
            <div class="row">
                <div class="col-md-6">
                    <!--  Contact Form  -->
                    <div class="contact-form">
                        <form method="post" action="mailer.php" id="contact-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <input class="con-field" name="name" id="name" type="text" placeholder="Name">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="con-field" name="email" id="email" type="text" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="con-field" name="messageForm" id="messageForm" type="text" placeholder="Subject">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="con-field" name="message" id="message" rows="6" placeholder="Your Message"></textarea>
                                        <div class="submit-area">
                                            <input type="submit" id="submit-contact" class="btn-alt" value="Send Us">
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.023938894304!2d-81.38341548467582!3d19.324767486945657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f2587a9a0b98737%3A0x38fe616bb6df631f!2s638+W+Bay+Rd%2C+Cayman+Islands!5e0!3m2!1sen!2sus!4v1549260798680"></iframe>
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