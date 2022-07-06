@extends('client.layouts.appClient')
@section('content')
<section class="about_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="abut_title">
                    <h2 style="text-align: center;color: #33ACFF">  
                        INTERNET CONSULTING
                        </h2>
                        <p> Internet est un outil de communication incontournable pour les entreprises aujourd’hui ! Cependant les
                            aspects suivants constituent des défis pour certaines d’entre elles :</p>
                     <div>
                        <ul>
                            <li> <i class="fa fa-hand-o-right"> </i>  &nbsp; Quel est le meilleur fournisseur d’accès internet ? </li>
                            <li><i class="fa fa-hand-o-right"> </i> &nbsp; Quel débit est adapté pour mes besoins ? combien mecoûtera-t-il ? </li>
                            <li><i class="fa fa-hand-o-right"> </i> &nbsp; Quelle technologie d’accès me convient ? ADSL, FIBRE OPTIQUE, 4G, WiMax  </li>
                            <li><i class="fa fa-hand-o-right"> </i> &nbsp; Le FAI m’offrira-t-il un meilleur SAV ? </li>
                            <li><i class="fa fa-hand-o-right"> </i> &nbsp; Confiez  la  résolution  de  vos  problèmes  informatique à  vecteur+ technologies </li>
                        </ul>
                    </div>
                    <p>Vecteur+ technologies se propose de vous offrir sonexpertise dans ce domaine. Concrètement nos 
                        ingénieurs vous aideront : </p>
                        <div>
                            <ul>
                                <li><i class="fa fa-hand-o-right"> </i> &nbsp; À dimensionner vos besoins en termes de débit et des solutions Internet</li>
                                <li><i class="fa fa-hand-o-right"> </i> &nbsp; À choisir le FAI adapté à vos besoins, selon votre budget et votre situation géographique.</li>
                                <li><i class="fa fa-hand-o-right"> </i> &nbsp; À choisir la technologie d’accès qui convient à vosbesoins.</li>
                                <li><i class="fa fa-hand-o-right"> </i> &nbsp; À faire les démarches nécessaires auprès des FAI.</li>
                                <li><i class="fa fa-hand-o-right"> </i> &nbsp; Éventuellement à s’occuper de la maintenance de cette connexion Internet.</li>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{asset('frontend/images/internet.jpg')}}" alt=""> <br> <img src="{{asset('frontend/images/internet.jpg')}}" alt=""> <br><img src="{{asset('frontend/images/internet.jpg')}}" alt="">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="about_box">
                    <img src="{{asset('frontend/images/internetEntreprise.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection