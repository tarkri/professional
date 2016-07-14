<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function postForm(Request $request){

        $rules = [
            'name'     => 'required',
            'email'    => 'required|email',
            'type_request' => 'required',
            'comment' => 'required'
        ];

        $input = $request->all();
        $validation = Validator::make($input, $rules);

        if ($validation->passes()) {
            $message = [
                'name'     => $request['name'],
                'email'    => $request['email'],
                'type_request' => $request['type_request'],
                'comment' => $request['comment']
            ];
            Mail::send('emails.contact', $message, function ($m) use ($message)
            {
                $m->from('tarun@tarunkrishnan.com', 'Tarun Krishnan Site');

                $m->to('tarun@tarunkrishnan.com', 'Tarun Krishnan')->subject('Someone has submitted a form request on the Tarun Krishnan Website');
            });
            return back()->with('success', 'Thank you for contact Tarun! He will get back to you shortly!');
        }
        return back()->with('error', 'Please fill out all required fields');
    }
}
