<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;

class AuthController extends Controller
{


    //get home passe with list admin page
    public function home(){
           $admins = Admin::orderBy('id', 'DESC')->paginate(5);
           return view('admin.template.index')->with('admins',$admins);
    }

    //add new user account
    public function add_admin(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required|unique:admins',
            'phone' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'password' => 'required|min:4', ]);

        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->phone = $request->input('phone');
        $admin->gender = $request->input('gender');
        $admin->city = $request->input('city');
        $admin->password = bcrypt($request->input('password'));
        $admin->status = 1;
        $admin->save();

        return back()->with('status', 'Votre compte a bien été crée avec succès vous pouvez vous connecté');
    }




    //sign in account
    public function signin_account(Request $request)
    {
    $this->validate($request, ['email' => 'email|required', 'password' => 'required']);
    $admin = Admin::where('email', $request->input('email'))->first();
        if ($admin) {

            if (Hash::check($request->input('password'), $admin->password)) {
                if ($admin->status == 0) {
                    Alert::error('Error', 'Votre compte à été désactivé');
                    return back();
                }
                Session::put('email', $admin->email);
                return redirect('/admin');
            } else {
                Alert::error('Error', 'Mauvais mot de passe ou email');
                return back();
            }
        } else {
            Alert::error('Error', 'Vous n avez pas de compte');
            return back()->with('status', 'vous n ' . "'" . ' avez pas de compte ');
        }
    }


    
    //disable admin
     public function disable_admin($id)
    {
     $admin = Admin::find($id);
     $admin->status = 0;
     $admin->update();
     Toastr::warning("le admin a été désactiver avec succès :)", 'Success');
     return redirect('/admin');
    }

//enable
 public function enable_admin($id)
 {
    $admin = Admin::find($id);
    $admin->status = 1;
    $admin->update();
    Toastr::warning("le admin a été désactiver avec succès :)", 'Success');
    return redirect('/admin');
 }

//delete admin
 public function delete_admin($id)
 {
     $admin = Admin::find($id); 
     $admin->delete();
     Toastr::success("le admin a été supprimer avec succès :)", 'Success');
     return redirect('/admin');
 }



}
