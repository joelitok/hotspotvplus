<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class MailController extends Controller
{
//validation order
public function send_mail(Request $request)
{
$this->validate(
        $request,
        [
            'name' => 'required',
            'email' => 'required',
            'subject'=>'required',
            'message' => 'required'
        ]
    );
       //send mail
       Mail::send(
       'mailContact',
       array(
               'name' => $request->input('name'),
               'email' => $request->input('email'),
               'subject' => $request->input('subject'),
               'messages' => $request->input('message')
       ),

       function ($msg) use ($request) {
           $msg->from('joelnkouatchet@gmail.com');
           $msg->to('joelnkouatchet1995@gmail.com', 'User')->subject($request->input('name'));
       }
               );

    Alert::success('Thanks', 'Votre mail a étés récu. a très bientot');
    return redirect('/contactez');
}


}
