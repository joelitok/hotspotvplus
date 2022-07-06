@extends('client.layouts.appClient')
@section('content')
 <!-- Start: Service Section 
==================================================-->
 <section class="service_section">
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h2> Nos service informatiques</h2>
            <p>vecteur+ technologies 
est une entreprise de services informatiques et télécoms. 
spécialisée dans les réseaux lan, wan, wifi et fibre optique, l’entreprise héberge aussi les 
serveurs de messageries et les sites web.</p>
        </div>
        <!-- End:  heading -->
         <div class="row">
            <div class="owl-carousel owl-theme col-md-12" id="servic">
            <div class="serv_list">
                    <div class="service_img">
                        <img alt="team" class="img-responsive" src="{{asset('frontend/images/service1.jpg')}}">
                    </div>
                    <div class="service_para">
                        <a href="#">
                            <h3 style="color: #33ACFF">communications numériques sécurisées</h3>
                        </a>
                        <p>Toutes les entreprises doivent définir un canal conventionnel et sécuriser par lequel elles 
communiquent avec ses interlocuteurs. Les employés et les clients doivent utiliser des moyens de 
communications sécurisés et fiables. </p>
                    </div>
                </div>
            
                @if($services)
             @forelse ($services as $service)
                  <!--/Item -->
                <div class="serv_list">
                     <div class="service_img">
                        <img alt="team" class="img-responsive" src="{{asset('service_images/'.$service->service_image)}}">
                    </div>
                     <div class="service_para">
                        <a href="#">
                            <h3 style="color: #33ACFF">{{$service->service_title}}</h3>
                        </a>
                        <p>{{\Illuminate\Support\Str::limit($service->service_description, 100, $end='...')}}</p>
                        <a class="serv_read" href="{{URL::to('/service-detail/'.$service->id)}}">voir plus</a>
                    </div>  
                </div> 
             @empty
                 <h1>Aucun Service</h1>
             @endforelse
                 
             @endif  
            </div>
        </div> 
        <!---/.row -->
    </div>
    <!--/.container -->
</section>
<!-- End: Service Section 
==================================================--> 

<!-- Start: Call to action  Section 
==================================================-->
<section class="calltoaction_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 callto-pull-left">
                <div class="callto-text">
                    <h2>Vecteur+ technologies</h2>
                    <p>Vecteur+ technologies est une entreprise de services informatiques et télécoms.</p>
                </div>
                <div class="callto-link">
                    <span> Tél: +237 6 75 75 94 82</span>
                    <a href="{{URL::to('/contactez')}}" class="more-link">Nous contactez </a>
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