<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;

class ContactController extends Controller
{
    public function create() {
        return view('contact/create');
    }

    public function store(ContactFormRequest $request) {
        
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->msg;

        $message->save();

        $mailable = new ContactMessageCreated($message);
        Mail::to(env('MAIL_FROM_ADDRESS'))->send($mailable);

        Flashy::info('Merci nous vous reviendrons !');
        return redirect()->route('home_path');
    }
}
