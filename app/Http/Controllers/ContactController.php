<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contacts = Contact::get();
        return view('pages.contact', compact('contacts'));
    }
}
