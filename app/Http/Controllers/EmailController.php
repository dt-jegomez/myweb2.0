<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class EmailController extends Controller
{
    public function contact(Request $request){
        $subject = "NOTIFICACION DE WWW.JUANGOMEZ.GRIDSOFT.CO"; // el asunto del correo 
        $for = "go.juangomez23@gmail.com";// quien recive el correo
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("developer.juxngomez@gmail.com"," JUAN GOMEZ SOLUTIONS"); // quien envia el correo
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}
