<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    // method for getting from beranda from 

    public function beranda() 
    {
        return view('guest/index');
    }

    public function about() 
    {
        return view('guest/tentang');
    }
}
