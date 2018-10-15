<?php

namespace laracarte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use laracarte\Http\Requests\ContactRequest;
use laracarte\Mail\ContactMessageCreated;
use laracarte\Models\Message;

class ContactsController extends Controller
{
    public function create ()
    {
        return view('Contacts.create');
    }

    public function store (ContactRequest $request)
    {
        $message = Message::create($request->only(['name', 'email', 'message']));
        //$message =new Message();
       // $message->name = $request->name;
       // $message->email = $request->email;
       // $message->message = $request->message;
       // $message->save();

        //$mailable = new ContactMessageCreated($message);
        Mail::to(config('laracarte.admin_support_email'))->send(new ContactMessageCreated($message));

        flashy('Nous vous répondrons dans les plus brefs délais!');

        return redirect()->route('root_path');
    }


}
