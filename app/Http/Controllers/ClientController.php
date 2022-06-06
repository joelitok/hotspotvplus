<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Tariff;
use App\Models\Service;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
// check if number is find
public $exist=false;

    
public function home() {


$sliders=Slider::where('slider_status',1)->orderBy('id', 'DESC')->get(); 
$tariffs=Tariff::where('tariff_status',1)->orderBy('id', 'DESC')->get(); 
return view('client.template.home')->with('sliders',$sliders)->with('tariffs', $tariffs);
                           }                           
public function rentAwifi($id=null){

//listes des villes
$cities = array("DOUALA","ADAMAOUA","BAFFOUSSAM","BAMENDA","BERTOUA","BUEA","EBOLOWA","GAROUA","MAROUA","YAOUNDE");

$tariffs=Tariff::where('tariff_status',1)->orderBy('id', 'DESC')->get(); 
$tariff=Tariff::find($id);
if($tariff){
$this->exist=true;
$tariffs=Tariff::where('tariff_status',1)->where('tariff_name','<>',$tariff->tariff_name)->orderBy('id', 'DESC')->get(); 
return view('client.template.rentAwifi')
->with('cities', $cities)->with('tariffs',$tariffs)
->with('tariff',$tariff)->with('exist', $this->exist);
}
return view('client.template.rentAwifi')
    ->with('cities', $cities)->with('tariffs',$tariffs)->with('exist',$this->exist);

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


//validation order
 public function order_add_save(Request $request)
 {
 $this->validate(
         $request,
         [
             'order_name' => 'required',
             'order_phone' => 'required',
             'order_email'=>'required',
             'order_city' => 'required'
         ]
     );


        //send mail
        Mail::send(
        'mailForm',
        array(
                'order_name' => $request->input('order_name'),
                'order_email' => $request->input('order_email'),
                'order_phone' => $request->input('order_phone'),
                'order_forfait_name' => $request->input('order_forfait_name'),
                'order_city' => $request->input('order_city'),
                'dateStart' => $request->input('dateStart'),
                'dateEnd' => $request->input('dateEnd'),
        ),
        function ($message) use ($request) {
            $message->from('joelnkouatchet@gmail.com');
            $message->to('joelnkouatchet1995@gmail.com', 'User')->subject($request->input('order_forfait_name'));
        }
                );


     //save order
     $order = new Order();
     $order->order_name = $request->input('order_name');
     $order->order_email = $request->input('order_email');
     $order->order_phone = $request->input('order_phone');
     $order->order_forfait_name = $request->input('order_forfait_name');
     $order->order_city = $request->input('order_city');
     $order->order_periode = $request->input('dateStart').'//'.$request->input('dateEnd');
     $order->order_status = 1;
     $order->save();
     Alert::success('Thanks', 'Votre commande à été bien prise en compte');
     return redirect('/rent-a-wifi');
 }




















}
