<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all()->first();
        return view('contact', ['contact'=> $contact]);
    }

    public function sendForm(){
        return redirect()->action([ContactController::class, 'index']);
    }
}
