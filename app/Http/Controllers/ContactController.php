<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Form show 
    public function contact()
    {
        return view('contact');
    }

    // Form submit handle 
    public function submit(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $contactData = $request->only('name', 'email', 'phone', 'message');
        session(['contactData' => $contactData]);

        return redirect()->route('contact')->with('success', 'Form submission successful!');
    }
}
