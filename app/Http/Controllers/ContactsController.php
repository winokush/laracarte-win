<?php

namespace laracarte\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create ()
    {
        return view('Contacts.create');
    }
}
