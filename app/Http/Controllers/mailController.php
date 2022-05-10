<?php

namespace App\Http\Controllers;
use App\pcs;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class mailController extends Controller
{
    public function sendmail( Request $request) {

        $input = $request->all();
        $newsletter = pcs::create($input);

        Mail::send('layouts.frontend.mailbox', $newsletter->toArray(),
        function($message){
            $message->to('ms0063443@gmail.com', 'Mohan')
            ->subject('mail send');
        });

        session()->flash('$message', $input['email']. 'successfully saved');
    }
}
