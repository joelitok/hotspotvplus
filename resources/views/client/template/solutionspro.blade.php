@extends('client.layouts.appClient')
@section('content')
<section class="about_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="abut_title">
                    <h2 style="text-align: center;color: #33ACFF">  
                         Services Informatiques 
                        </h2>
                     <div style="font-size: 20px">
                        
                            Vous êtes une entreprise, une association. <br>
                            Vous ne disposez pas d’un service informatique interne. <br>
                            Vous en offrir un, est coûteux ! <br>
                            Alors externalisez votre service informatique ! <br>
                            Confiez  la  résolution  de  vos  problèmes  informatique à  vecteur+ technologies <br> 
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_box">
                    <img src="{{asset('frontend/images/about.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection