<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    //
    public function sendMail(Request $request){
        Mail::send(new SendMail($request));
        return redirect('/');
    }
}
