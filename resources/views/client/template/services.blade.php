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
             @if($services)
             @forelse ($services as $service)
                  <!--/Item -->
                <div class="serv_list">
                    <div class="service_img">
                        <img alt="team" class="img-responsive" src="{{asset('/service_images/'.$service->service_image)}}">
                    </div>
                    <div class="service_para">
                        <a href="services.html">
                            <h3>{{$service->service_title}}</h3>
                        </a>
                        <p>{{\Illuminate\Support\Str::limit($service->service_description, 100, $end='...')}}</p>
                        <a class="serv_read" href="{{URL::to('/service-detail')}}">voir plus</a>
                    </div>
                </div>
             @empty
                 
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
                    <h2>We're here to help your computer repair service</h2>
                    <p>We're here to help you manage your problem regular emails that will arm </p>
                </div>
                <div class="callto-link">
                    <span> +47 377 488 289</span>
                    <a href="" class="more-link">Send Request </a>
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