<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
{
    $validated = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'message' => 'required|string|max:2000',
    ]);

    Mail::to('rubensdonfack03@gmail.com')->send(new ContactMessage($validated));

    return back()->with('success', 'Votre message a été envoyé avec succès !');
}
}

