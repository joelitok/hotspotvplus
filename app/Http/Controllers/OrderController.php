<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Order;
use Storage;

class OrderController extends Controller
{

 //liste des orders
 public function orders()
 {
     $orders = Order::orderBy('id', 'DESC')->paginate(5);
     return view('admin.template.orders.orders')->with('orders', $orders);
 }

 public function disable_order($id)
 {
     $order = Order::find($id);
     $order->order_status = 0;
     $order->update();
     Toastr::warning("le order a été désactiver avec succès :)", 'Success');
     return redirect('/admin/orders');
 }


 public function enable_order($id)
 {
     $order = Order::find($id);
     $order->order_status = 1;
     $order->update();
     Toastr::success("le order a été activer  avec succès :)", 'Success');
     return redirect('/admin/orders');
 }


 public function delete_order($id)
 {
     $order = Order::find($id);
     $order->delete();
     Toastr::success("le order a été supprimer avec succès :)", 'Success');
     return redirect('/admin/orders');
 }



 public function update_order($id)
 {
     $order = Order::find($id);
     return view('admin.orders.updateorder')->with('order', $order);
 }


 public function order_update_save_action(Request $request)
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

    $order->order_name = $request->input('order_name');
    $order->order_email = $request->input('order_email');
    $order->order_phone = $request->input('order_phone');
    $order->order_forfait_name = $request->input('order_forfait_name');
    $order->order_city = $request->input('order_city');
    $order->order_periode = $request->input('dateStart').'//'.$request->input('dateEnd');
    $order->update();
    Toastr::success("le order a été modifier avec succès :)", 'Success');
    return redirect('/admin/orders');
 }



    
}
