<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        
        // Save to database
        $contact = Contact::create($validated);

        // Send email to your mailbox (replace with your e-mail below!)
        Mail::to('khianeaquino054@email.com')->send(new ContactFormMail($contact));
        
        return redirect('/')->with('status', 'Contact form sent!');
    }
}
