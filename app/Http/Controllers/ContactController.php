<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $request = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'numerocelular' => 'required'
        ]);
   
        $contacto = Contact::create($request);

        Mail::to('admin@admin.com')->send(new ContactReceived($contacto));

        return back()->with('success','Solicitud enviada con exito');
    }

}
