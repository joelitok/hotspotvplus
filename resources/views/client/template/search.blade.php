@extends('client.layouts.appClient')
@section('content')
 <!-- Start: Service Section 
==================================================-->
<section class="service_section">
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h2> Résultat</h2>
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
                            <h3>communications numériques sécurisées</h3>
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
                        <a href="services.html">
                            <h3>{{$service->service_title}}</h3>
                        </a>
                        <p>{{\Illuminate\Support\Str::limit($service->service_description, 100, $end='...')}}</p>
                        <a class="serv_read" href="{{URL::to('/service-detail/'.$service->id)}}">voir plus</a>
                    </div>
                </div>
             @empty
                 <div class="justify-content-center">  <h2> Aucun Résultat</h2></div> 
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

@endsection