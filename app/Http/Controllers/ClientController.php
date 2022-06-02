<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;
class ClientController extends Controller
{
    
    
public function home() {
$sliders=Slider::where('slider_status',1)->orderBy('id', 'DESC')->get();    
return view('client.template.home')->with('sliders', $sliders);
                           }                           
public function rentAwifi(){
return view('client.template.rentAwifi');
}
public function solutions(){
return view('client.template.allSolutions');
}

public function contactez(){
return view('client.template.contact');
}

public function services(){
$services=Service::where('service_status', 1)->orderBy('id','DESC')->get();    
return view('client.template.services')->with('services', $services);  
}

public function service_detail(){
return view('client.template.servicedetail');
}




//operation in slider

//read slider
public function read_slider(){

}


//read service
public function read_service(){

}

//read detail service
public function read_detail_service(){

}


//read cout services
public function read_cout_service(){


}


//order mifi
public function order_mifi(){

}


















}
