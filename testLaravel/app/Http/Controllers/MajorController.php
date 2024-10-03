<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = DB::table('majors')->paginate(10);
        return view('admin.major.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.major.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code'          => 'required',
            'name'          => 'required|min:5',
            'image'      => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description'   => 'required|min:30',
        ]);

        $imagesName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imagesName);
        $query = DB::table('majors')->insert([
            'code'          => $request['code'],
            'name'          => $request['name'],
            'image'         => 'images/'.$imagesName,
            'description'   => $request['description'],
        ]);

        return redirect()->route('major.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $major = DB::table('majors')->where('id', $id)->first();
        return view('admin.major.show', compact('major'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

