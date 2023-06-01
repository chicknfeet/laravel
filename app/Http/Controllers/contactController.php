<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function index(){
        return view('contact');
    }

    public function submit(Request $request){
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        return view('contactout',[
            'name'=>$name,
            'email'=>$email,
            'message'=>$message
        ]);
    }
}
