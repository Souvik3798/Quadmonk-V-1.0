<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contact(Request $request){
        Mail::send('emails.contact', ['user' => $request], function ($m) use ($request) {
            $m->from(env('MAIL_FROM_ADDRESS'), $request->name);
            $m->to(env('MAIL_FROM_ADDRESS'), $request->name)->subject($request->subject);
        });

        return redirect('contact')->with('success','Email has been recived successfully. you will be contact soon');
    }

    public function quatation(Request $request){
        Mail::send('emails.quatation', ['user' => $request], function ($m) use ($request) {
            $m->from(env('MAIL_FROM_ADDRESS'), $request->name);
            $m->to(env('MAIL_FROM_ADDRESS'), $request->name)->subject("Quatation for $request->plan");
        });

        return redirect()->back()->with('success','Quatation has been registered. Please wait for our response');
    }
}
