<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Service;
use Storage;

class ServiceController extends Controller
{
   
    //liste des services
    public function services()
    {
        $services = Service::orderBy('id', 'DESC')->paginate(5);
        return view('admin.template.services.services')->with('services', $services);
    }

    
    //enregister un services
    public function service_add_save(Request $request)
    {
        $this->validate(
            $request,
            [
                'service_title' => 'required',
                'service_description' => 'required',
                'service_image' => 'image|nullable|max:19990'
            ]
        );

        if ($request->hasFile('service_image')) {
            //1 get file name with extension

            $fileNameWithExt = $request->file('service_image')->getClientOriginalName();
            //2 file name without extension

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //3 get extension
            $extension = $request->file('service_image')->getClientOriginalExtension();

            //4 renamane image to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            //$path = $request->file('service_image')->storeAs('public/service_images', $fileNameToStore);
            $path = $request->file('service_image')->move(public_path() . '/service_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $service = new Service();
        $service->service_title = $request->input('service_title');
        $service->service_description = $request->input('service_description');
        $service->service_description2 = $request->input('service_description2');
        $service->service_description3 = $request->input('service_description3');
        $service->service_image = $fileNameToStore;
        $service->service_status = 1;
        $service->save();
        Toastr::success("le service $service->service_title a bien été  ajouter :)", 'Success');
        return redirect('/admin/services');
    }

    

    public function disable_service($id)
    {
        $service = Service::find($id);
        $service->service_status = 0;
        $service->update();
        Toastr::warning("le service a été désactiver avec succès :)", 'Success');
        return redirect('/admin/services');
    }


    public function enable_service($id)
    {
        $service = Service::find($id);
        $service->service_status = 1;
        $service->update();
        Toastr::success("le service a été activer  avec succès :)", 'Success');
        return redirect('/admin/services');
    }


    public function delete_service($id)
    {
        $service = Service::find($id);
        if ($service->service_image != 'noimage.jpg') {
            Storage::delete('public/service_images/' . $service->image);
        }

        $service->delete();
        Toastr::success("le service a été supprimer avec succès :)", 'Success');
        return redirect('/admin/services');
    }



    public function update_service($id)
    {
        $service = Service::find($id);
        return view('admin.services.updateService')->with('service', $service);
    }


    public function service_update_save_action(Request $request)
    {

        $service = Service::find($request->input('id'));
        $service->service_title = $request->input('service_title');
        $service->service_description = $request->input('service_description');
        $service->service_description2 = $request->input('service_description2');
        $service->service_description3 = $request->input('service_description3');
        $this->validate(
            $request,
            [
                'service_title' => 'required',
                'service_descripton' => 'required',
                'service_image' => 'image| nullable|max:19990'
            ]
        );

        if ($request->hasFile('service_image')) {
            //1 get file name with extension

            $fileNameWithExt = $request->file('service_image')->getClientOriginalName();
            //2 file name without extension

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //3 get extension
            $extension = $request->file('service_image')->getClientOriginalExtension();

            //4 renamane image to store
            $fileNameToStore = $fileName . '_' . time() . '' . $extension;

            $path = $request->file('service_image')->move(
                public_path() . '/service_images',
                $fileNameToStore
            );

            if ($service->service_image != 'noimage.jpg') {
                Storage::delete('public/service_images/' . $service->image);
            }
            $service->service_image = $fileNameToStore;
        }

        $service->update();
        Toastr::success("le service a été modifier avec succès :)", 'Success');
        return redirect('/admin/services');
    }
}
