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





}
