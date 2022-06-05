<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Tariff;

class TariffController extends Controller
{
  //
       //liste des tariffs
       public function tariffs()
       {
           $tariffs = Tariff::orderBy('id', 'DESC')->paginate(5);
           return view('admin.template.tariffs.tariffs')->with('tariffs', $tariffs);
       }
   
       //enregister un tariffs
       public function tariff_add_save(Request $request)
       {
           $this->validate(
               $request,
               [
                   'tariff_name' => 'required',
                   'tariff_price' => 'required',
                   'tariff_data' => 'required',
                   'tariff_debit' => 'required',
                   'tariff_periode' => 'required',
               ]
           );
   
           $tariff = new tariff();
           $tariff->tariff_name = $request->input('tariff_name');
           $tariff->tariff_price = $request->input('tariff_price');
           $tariff->tariff_data = $request->input('tariff_data');
           $tariff->tariff_debit = $request->input('tariff_debit');
           $tariff->tariff_periode = $request->input('tariff_periode');
           $tariff->tariff_status = 1;
           $tariff->save();
           Toastr::success("le tariff $tariff->tariff_name a bien été  ajouter :)", 'Success');
           return redirect('/admin/tariffs');
       }
   
       
   
       public function disable_tariff($id)
       {
           $tariff = Tariff::find($id);
           $tariff->tariff_status = 0;
           $tariff->update();
           Toastr::warning("le tariff a été désactiver avec succès :)", 'Success');
           return redirect('/admin/tariffs');
       }
   
   
       public function enable_tariff($id)
       {
           $tariff = Tariff::find($id);
           $tariff->tariff_status = 1;
           $tariff->update();
           Toastr::success("le tariff a été activer  avec succès :)", 'Success');
           return redirect('/admin/tariffs');
       }
   
   
       public function delete_tariff($id)
       {
           $tariff = Tariff::find($id);
           $tariff->delete();
           Toastr::success("le tariff a été supprimer avec succès :)", 'Success');
           return redirect('/admin/tariffs');
       }
   
       public function update_tariff($id)
       {
           $tariff = Tariff::find($id);
           return view('admin.tariffs.updatetariff')->with('tariff', $tariff);
       }
   
       public function tariff_update_save_action(Request $request)
       {
   
           $tariff = Tariff::find($request->input('id'));
           $tariff->tariff_name = $request->input('tariff_name');
           $tariff->tariff_price = $request->input('tariff_price');
           $tariff->tariff_data = $request->input('tariff_data');
           $tariff->tariff_debit = $request->input('tariff_debit');
           $tariff->tariff_periode = $request->input('tariff_periode');
           $tariff->tariff_status = 1;
   
           $this->validate(
               $request,
               [
                   'tariff_name' => 'required',
                   'tariff_price' => 'required',
                   'tariff_data' => 'required',
                   'tariff_debit' => 'required',
                   'tariff_periode' => 'required',
               ]
           );
           $tariff->update();
           Toastr::success("le tariff a été modifier avec succès :)", 'Success');
           return redirect('/admin/tariffs');
       }
}
