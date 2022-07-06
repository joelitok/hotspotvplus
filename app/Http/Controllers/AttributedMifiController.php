<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Mifi;
use App\Models\Order;

class AttributedMifiController extends Controller
{

  
//mifi in app in  mifi manager
public function attributed_mifi_to_user(Request $request){
$this->validate( $request, [ 'id_mifi' => 'required', 'id_order' => 'required']);
    
if($request->id_mifi!=null && $request->id_order!=null){

        $mifi=Mifi::find($request->input('id_mifi'));
        $mifi->id_user_attributed_mifi = $request->input('id_order');
        $mifi->mifi_status = 1;
        $mifi->update();

        $order=Order::find($request->input('id_order'));
        $order->id_mifi_attributed= $request->input('id_mifi');
        $order->update();
    
    }
      
    Toastr::success('Success','Wifi Attribuer avec succèss');
      return back()->with('status','Wifi attribution effectuez');

    }

    //mifi in app in user manager
    public function attributed_user_to_mifi(Request $request){
    $this->validate($request,['id_order' => 'required', 'id_mifi' => 'required']
        );
    
if($request->id_mifi!=null && $request->id_order!=null){

        $order=Order::find($request->input('id_order'));
        $order->id_mifi_attributed = $request->input('id_mifi');
        $order->order_status = 1;
        $order->update();
  
        $mifi=Mifi::find($request->input('id_mifi'));
        $mifi->id_user_attributed_mifi= $request->input('id_order');
        $mifi->mifi_status = 1;
        $mifi->update();
    
    }
      
    Toastr::success('Success','Wifi Attribuer avec succèss');
      return back()->with('status','Wifi attribuer a cette utilisateur');

    }
   

    public function reset_attributed_mifi_to_user($id){
        //rechercher le wifi pour l'attribuer
        $mifi=Mifi::find($id);
        if($mifi!=null){
          $idUser=$mifi->id_user_attributed_mifi;
          $mifi->id_user_attributed_mifi = 0;
          $mifi->mifi_status = 0;
          $mifi->update();
  
          //rechercher a partir du nom le client a qui on souhaite desatribuer le wifi
          //$order=Order::where('id_mifi_attributed',  $idUser)->first();
          $order=Order::find($idUser);
          if($order->id_mifi_attributed){
            $order->id_mifi_attributed=0;
          }
          
          $order->update();
        }
       
    
      Toastr::warning('Warning','Wifi enlever avec succèss');
      return back()->with('status','Wifi attribuer');

    }


    public function reset_attributed_user_to_mifi($id){
       
        $order=Order::find($id);
     
        if($order!=null){
          $idMifi = $order->id_mifi_attributed;
          $order->id_mifi_attributed=0;
          $order->update();
  
          //recherche le mifi a modifier
        //  $mifi=Mifi::where('id_user_attributed_mifi', $idMifi)->first();
          $mifi=Mifi::find($idMifi);
          if($mifi->id_user_attributed_mifi){
            $mifi->id_user_attributed_mifi = 0;
          }
          $mifi->mifi_status = 0;
          $mifi->update();
        }
      Toastr::warning('Warning','Wifi enlever avec succèss');
      return back()->with('status','Wifi attribuer');

    }
}
