<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    //
       //liste des sliders
       public function sliders()
       {
           $sliders = Slider::orderBy('id', 'DESC')->paginate(5);
           return view('admin.template.sliders.sliders')->with('sliders', $sliders);
       }
   
       
       //enregister un sliders
       public function slider_add_save(Request $request)
       {
           $this->validate(
               $request,
               [
                   'slider_title' => 'required',
                   'slider_description' => 'required',
                   'slider_image' => 'image|nullable|max:19990'
               ]
           );
   
           if ($request->hasFile('slider_image')) {
               //1 get file name with extension
   
               $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
               //2 file name without extension
   
               $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
   
               //3 get extension
               $extension = $request->file('slider_image')->getClientOriginalExtension();
   
               //4 renamane image to store
               $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
   
               //$path = $request->file('slider_image')->storeAs('public/slider_images', $fileNameToStore);
               $path = $request->file('slider_image')->move(public_path() . '/slider_images', $fileNameToStore);
           } else {
               $fileNameToStore = 'noimage.jpg';
           }
           $slider = new Slider();
           $slider->slider_title = $request->input('slider_title');
           $slider->slider_description = $request->input('slider_description');
           $slider->slider_image = $fileNameToStore;
           $slider->slider_status = 1;
           $slider->save();
           Toastr::success("le slider $slider->slider_title a bien été  ajouter :)", 'Success');
           return redirect('/admin/sliders');
       }
   
       
   
       public function disable_slider($id)
       {
           $slider = Slider::find($id);
           $slider->slider_status = 0;
           $slider->update();
           Toastr::warning("le slider a été désactiver avec succès :)", 'Success');
           return redirect('/admin/sliders');
       }
   
   
       public function enable_slider($id)
       {
           $slider = Slider::find($id);
           $slider->slider_status = 1;
           $slider->update();
           Toastr::success("le slider a été activer  avec succès :)", 'Success');
           return redirect('/admin/sliders');
       }
   
   
       public function delete_slider($id)
       {
           $slider = Slider::find($id);
           if ($slider->slider_image != 'noimage.jpg') {
               Storage::delete('public/slider_images/' . $slider->image);
           }
   
           $slider->delete();
           Toastr::success("le slider a été supprimer avec succès :)", 'Success');
           return redirect('/admin/sliders');
       }
   
   
   
       public function update_slider($id)
       {
           $slider = Slider::find($id);
           return view('admin.sliders.updateSlider')->with('slider', $slider);
       }
   
   
       public function slider_update_save_action(Request $request)
       {
   
           $slider = Slider::find($request->input('id'));
           $slider->slider_title = $request->input('slider_title');
           $slider->slider_description = $request->input('slider_description');
   
           $this->validate(
               $request,
               [
                   'slider_title' => 'required',
                   'slider_descripton' => 'required',
                   'slider_image' => 'image| nullable|max:19990'
               ]
           );
   
           if ($request->hasFile('slider_image')) {
               //1 get file name with extension
   
               $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
               //2 file name without extension
   
               $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
   
               //3 get extension
               $extension = $request->file('slider_image')->getClientOriginalExtension();
   
               //4 renamane image to store
               $fileNameToStore = $fileName . '_' . time() . '' . $extension;
   
               $path = $request->file('slider_image')->move(
                   public_path() . '/slider_images',
                   $fileNameToStore
               );
   
               if ($slider->slider_image != 'noimage.jpg') {
                   Storage::delete('public/slider_images/' . $slider->image);
               }
               $slider->slider_image = $fileNameToStore;
           }
   
           $slider->update();
           Toastr::success("le slider a été modifier avec succès :)", 'Success');
           return redirect('/admin/sliders');
       }
}
