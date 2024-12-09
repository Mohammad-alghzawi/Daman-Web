<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'subject' => 'required|string|max:255',
            'contacts_details' => 'required|string',
        ]);

        $details = $request->only(['name', 'email', 'phone', 'subject', 'contacts_details']);

        try {
            // Send Email
            Mail::to('daman@damanest.com')->send(new ContactUsMail($details));

            // Success Message
            return redirect()->route('home')->with('status', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Failure Message
            return redirect()->route('home')->with('status', 'Failed to send your message. Please try again later.');
        }
    }
}
