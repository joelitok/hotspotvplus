@extends('client.layouts.appClient')
@section('content')
<section class="about_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="abut_title">
                    <h2 style="text-align: center;color: #33ACFF">  
                         Wifi Pour Conférence 
                        </h2>
                     <p> Nous vous offrons une solution internet sans fil adapté et sur mesure pour vos seminaires,Hackatons,Atélier et Télétravail...</p>
                     <div class="about_list_itm">
                        <ul>
                            <li>Internet Haut Débit (200 mètres de diamètres) </li>
                            <li>Connexion sécurisé et facile a installée </li>
                            <li>Solution disponible en 24 heurs ne neccessite aucune configuration/installation </li>
                            <li>Support technique et SAV disponible 7j/7</li>
                        </ul>
                    </div>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="about_box">
                    <img src="{{asset('frontend/images/mificonference.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection