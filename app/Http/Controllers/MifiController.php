<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Mifi;
use App\Models\Order;

use Storage;

class MifiController extends Controller
{
     //liste des mifis
     public function mifis()
     {
         $mifis = Mifi::orderBy('id', 'DESC')->paginate(5);
         $user_not_attributed = Order::orderBy('id','DESC')->where('id_mifi_attributed', 0)->get();
         $user_attributed = Order::orderBy('id','DESC')->where('id_mifi_attributed','<>',0)->get();
         return view('admin.template.mifis.mifis')->with('mifis', $mifis)
         ->with('user_not_attributed', $user_not_attributed)->with('user_attributed', $user_attributed);
     }
 
     
     //enregister un mifis
     public function mifi_add_save(Request $request)
     { 
         $this->validate(
             $request,
             [
                 'mifi_name' => 'required',
                 'mifi_name_search' => 'required',
                 'mifi_serial_number' => 'required',
                 'mifi_marque' => 'required',
                 'mifi_password' => 'required',
                 'mifi_puce_number' => 'required',
                 'mifi_date_begin_use' => 'required',
                 'mifi_image' => 'image|nullable|max:19990'
             ]
         );
 
         if ($request->hasFile('mifi_image')) {
             //1 get file name with extension
 
             $fileNameWithExt = $request->file('mifi_image')->getClientOriginalName();
             //2 file name without extension
 
             $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
 
             //3 get extension
             $extension = $request->file('mifi_image')->getClientOriginalExtension();
 
             //4 renamane image to store
             $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
 
             //$path = $request->file('mifi_image')->storeAs('public/mifi_images', $fileNameToStore);
             //$path = $request->file('mifi_image')->move(public_path() . '/mifi_images', $fileNameToStore);
             $path = $request->file('mifi_image')->move('mifi_images', $fileNameToStore);
         
            } else {
             $fileNameToStore = 'noimage.jpg';
         }

         $mifi = new Mifi();
         $mifi->mifi_name = $request->input('mifi_name');
         $mifi->mifi_name_search = $request->input('mifi_name_search');
         $mifi->mifi_serial_number = $request->input('mifi_serial_number');
         $mifi->mifi_marque = $request->input('mifi_marque');
         $mifi->mifi_password = $request->input('mifi_password');
         $mifi->mifi_puce_number = $request->input('mifi_puce_number');
         $mifi->mifi_date_begin_use = $request->input('mifi_date_begin_use');
         $mifi->mifi_name = $request->input('mifi_name');

         $mifi->mifi_image = $fileNameToStore;
         $mifi->mifi_status = 0;
         $mifi->save();
         Toastr::success("le mifi $mifi->mifi_name a bien été  ajouter :)", 'Success');
         return redirect('/admin/mifis');
     }
 
     
 
     public function disable_mifi($id)
     {
         $mifi = Mifi::find($id);
         $mifi->mifi_status = 0;
         $mifi->update();
         Toastr::warning("le mifi a été désactiver avec succès :)", 'Success');
         return redirect('/admin/mifis');
     }
 
 
     public function enable_mifi($id)
     {
         $mifi = Mifi::find($id);
         $mifi->mifi_status = 1;
         $mifi->update();
         Toastr::success("le mifi a été activer  avec succès :)", 'Success');
         return redirect('/admin/mifis');
     }
 
 
     public function delete_mifi($id)
     {
         $mifi = Mifi::find($id);
         if ($mifi->mifi_image != 'noimage.jpg') {
             Storage::delete('mifi_images/' . $mifi->mifi_image);
         }
         $mifi->delete();
         Toastr::success("le mifi a été supprimer avec succès :)", 'Success');
         return redirect('/admin/mifis');
     }
 
 
 
   
 
 
     public function mifi_update_save_action(Request $request)
     {
 
        //dd($request->input('id'));
         $mifi = Mifi::find($request->input('id'));

         $mifi->mifi_name = $request->input('mifi_name');
         $mifi->mifi_name_search = $request->input('mifi_name_search');
         $mifi->mifi_serial_number = $request->input('mifi_serial_number');
         $mifi->mifi_marque = $request->input('mifi_marque');
         $mifi->mifi_password = $request->input('mifi_password');
         $mifi->mifi_puce_number = $request->input('mifi_puce_number');
         $mifi->mifi_date_begin_use = $request->input('mifi_date_begin_use');
         $mifi->mifi_name = $request->input('mifi_name');

         $this->validate(
             $request,
             [
                 'mifi_name' => 'required',
                 'mifi_name_search' => 'required',
                 'mifi_serial_number' => 'required',
                 'mifi_marque' => 'required',
                 'mifi_password' => 'required',
                 'mifi_puce_number' => 'required',
                 'mifi_date_begin_use' => 'required',
                 'mifi_image' => 'image|nullable|max:19990'
          
             ]
         );
 
         if ($request->hasFile('mifi_image')) {
             //1 get file name with extension
 
             $fileNameWithExt = $request->file('mifi_image')->getClientOriginalName();
             //2 file name without extension
 
             $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
 
             //3 get extension
             $extension = $request->file('mifi_image')->getClientOriginalExtension();
 
             //4 renamane image to store
             $fileNameToStore = $fileName . '_' . time() . '' . $extension;
 
             $path = $request->file('mifi_image')->move(
                'mifi_images',
                 $fileNameToStore
             );
 
             if ($mifi->mifi_image != 'noimage.jpg') {
                 Storage::delete('mifi_images/' . $mifi->image);
             }
             $mifi->mifi_image = $fileNameToStore;
         }
 
         $mifi->update();
         Toastr::success("le mifi a été modifier avec succès :)", 'Success');
         return redirect('/admin/mifis');
     }
}
