<?php

namespace Ramjan\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Ramjan\Contact\mail\ContactMailable;
use Ramjan\Contact\models\Contact;

class ContactController extends Controller
{
    public function index()
    {
    	return view('contact::contact');
    }

    public function send(Request $request)
    {
    	Mail::to(config('contact.email_send_to'))->send(new ContactMailable($request->message, $request->name));
    	Contact::create($request->all());
    	return redirect()->back();
    }
}
