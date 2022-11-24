<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index() {
        $contacts = Contact::simplePaginate(50);
        return view('dashboard')->with(compact('contacts'));
    }
}
