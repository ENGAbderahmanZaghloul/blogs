<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        if(Auth::check())
        {   // dd($request->all());
            $data = $request->validate([
                'email' => 'required|email|unique:subscribers,email',
            ]);

            Subscriber::create([
                'email' => $data['email'],
            ]);
        
            return redirect()->back()->with('success', 'You have successfully subscribed to our newsletter!');
        }
        else
            return redirect()->route('login');
    }
}
