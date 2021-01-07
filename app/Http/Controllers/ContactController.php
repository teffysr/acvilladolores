<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all()->first();
        return view('contact', ['contact'=> $contact])->with('message_sent', 'Su consulta ha sido enviada');;
    }

    public function sendForm(Request $request){
        $details = [
            'nombre' => $request->get('name') ,
            'email' => $request->get('email'),
            'pais' => $request->get('country'),
            'mensaje' => $request->get('message')
        ];

        Mail::to('teffy.sr@gmail.com')->send(new ContactMail($details));

        return back()->with('message_sent', 'Su consulta ha sido enviada');
    }
}
