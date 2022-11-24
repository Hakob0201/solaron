<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'email' =>  'required|email',
        ]);

        Contact::orderby('desc')->create($request->all());

        return redirect()->back()->with('message', 'The Message');
    }
}
