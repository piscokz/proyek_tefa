<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
    $contacts = Contact::all();
    return view('admin.dashboard', compact('contacts'));
    }

}

