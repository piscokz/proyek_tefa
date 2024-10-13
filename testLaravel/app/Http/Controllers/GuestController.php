<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GuestController extends Controller
{
    // method for getting from beranda from 

    // public function beranda() 
    // {
    //     return view('admin/major/create');
    // }
    public function beranda() 
    {
        return view('guest/index');

        // Ambil semua data program keahlian
        $majors = DB::table('majors')->get(); 
        
        // Kembalikan tampilan dengan data program keahlian
        return view('guest.index', compact('majors'));
        
    }

    public function tentang() 
    {
        return view('guest/tentang');
    }

    public function kabarlensa() 
    {
        return view('guest/news/index');
    }

    public function kontak() 
    {
    return view('guest/contact');
    }


    public function pplg() 
    {
        return view('guest/pplg');
    }



    public function bkk() 
    {
        return view('guest/bkk');
    }
    public function pkl() 
    {
        return view('guest/pkl');
    }

    public function tc() 
    {
        return view('guest/tc');
    }    
}
