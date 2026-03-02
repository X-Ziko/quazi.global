<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
        public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::mailer('smtp')->raw(
            "Name: {$request->name}\n".
            "Email: {$request->email}\n\n".
            "Message:\n{$request->message}",
                function ($message) use ($request) {
                    $message->to('quazi@quazi.global')
                            ->subject($request->subject)
                            ->replyTo($request->email);
    }
);

        return back()->with('success', 'Message Sent Successfully!');
    }
    //
}
