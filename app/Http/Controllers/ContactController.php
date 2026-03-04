<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'email' => 'required|email|email',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string|max:1000'
        ]);

        Contact::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'message' => $data['message']
        ]);

        return redirect()->back()->with('success', 'Your contact message has been sent successfully!');
    }
}
