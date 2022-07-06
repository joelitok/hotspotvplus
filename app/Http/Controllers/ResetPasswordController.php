<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; 
use App\Models\Admin;
use App\Models\Password_reset;  
use Mail; 
use Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ResetPasswordController extends Controller
{
    
    public function showForgetPasswordForm()
      { return view('client.template.password.forgotPasswordForm'); }
  
     
      public function submitForgetPasswordForm(Request $request)
      {
    $request->validate([ 'email' => 'required|email|exists:admins']);
    $token = Str::random(64);
        $password_reset=new Password_reset();
        $password_reset->email=$request->email;
        $password_reset->token=$token;
        $password_reset->created_at=Carbon::now();
        $password_reset->save();
        
        Mail::send('mailForgetPassword', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('réinitialisé votre mots de passe');
          });
  
          return back()->with('message', 'Un lien de reinitialisation de mots de passe vous a été envoyer');
      }
    

      public function showResetPasswordForm($token) { 
         return view('client.template.password.forgotPasswordLink', ['token' => $token]);
      }

      public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:admins',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);
  
       $updatePassword = Password_reset::where('email',$request->email)->where('token',$request->token)->first();        
        
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
           $admin = Admin::where('email', $request->email)->first();
           if($admin){
          $admin->password=bcrypt($request->password);
          $admin->update();
                    }

          $password_reset = Password_reset::where('email', $request->email)->first();
          $password_reset->delete(); 
          
          Alert::success('Good', 'votre mots de passe à été modifier avec success');      
          return redirect('/');

      }
}

    



