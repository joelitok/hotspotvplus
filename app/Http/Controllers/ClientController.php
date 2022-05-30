<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    
public function home() {
return view('client.template.home');
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
return view('client.template.services');   
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
