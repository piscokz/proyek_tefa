<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $majors = DB::table('majors')->paginate(6);
    \Log::info(get_class($majors)); // This should output 'Illuminate\Pagination\LengthAwarePaginator'
    return view('admin.major.index', compact('majors'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.major.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code'        => 'required',
            'name'        => 'required|min:5',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|min:30',
        ]);

        $imagesName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imagesName);

        DB::table('majors')->insert([
            'code'        => $request->input('code'),
            'name'        => $request->input('name'),
            'image'       => 'images/'.$imagesName,
            'description' => $request->input('description'),
        ]);

        return redirect()->route('major.index')->with('success', 'Program keahlian berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $major = DB::table('majors')->where('id', $id)->first();

        if (!$major) {
            return redirect()->route('major.index')->with('error', 'Program keahlian tidak ditemukan.');
        }

        return view('admin.major.show', compact('major'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $major = DB::table('majors')->where('id', $id)->first();
        return view('admin.major.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'code'        => 'required',
            'name'        => 'required|min:5',
            'image'       => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|min:30',
        ]);

        $major = DB::table('majors')->where('id', $id)->first();

        if ($request->hasFile('image')) {
            $imagesName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imagesName);
            $imagePath = 'images/'.$imagesName;
        } else {
            $imagePath = $major->image;
        }

        DB::table('majors')->where('id', $id)->update([
            'code'        => $request->input('code'),
            'name'        => $request->input('name'),
            'image'       => $imagePath,
            'description' => $request->input('description'),
        ]);

        return redirect()->route('major.index')->with('success', 'Program keahlian berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('majors')->where('id', $id)->delete();
        return redirect()->route('major.index')->with('success', 'Program keahlian berhasil dihapus.');
    }

    /**
     * Guest views for program expertise.
     */
    public function indexGuest()
    {
    // Tidak menggunakan paginasi, hanya menampilkan semua major
    $majors = DB::table('majors')->get(); // Menggunakan get() untuk mengambil semua data tanpa paginasi
    return view('guest.majors.index', compact('majors'));
    }




    public function showGuest($id)
    {
    $major = DB::table('majors')->where('id', $id)->first(); // Mengambil satu item untuk detail

    if (!$major) {
        return redirect()->route('majors.index')->with('error', 'Program keahlian tidak ditemukan.');
    }

    return view('guest.majors.show', compact('major')); // Tidak ada paginasi untuk halaman show
    }

}
