<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // You can send email here or store in database
        // Mail::to('admin@example.com')->send(new ContactMail($validated));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}