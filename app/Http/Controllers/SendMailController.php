<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = [
            'email' => $request->get('email'),
        ];

        $to_name =$request->get('name');
        $to_email = $request->get('email');

        $data = array('name' => 'Mohan(Pollution Control System)', 'body' => 'He is ययय!');

        Mail::send('newsletter', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Laravel Test Mail');

            $message->from('ms0063443@gmail.com', 'Pollution Control System');
        });

        return redirect('/');
    }
}
