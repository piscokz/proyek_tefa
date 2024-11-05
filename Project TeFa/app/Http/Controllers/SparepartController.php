<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    public function index()
    {
        $spareparts = Sparepart::paginate(10);
        return view('sparepart.index', compact('spareparts'));
    }

    public function create()
    {
        return view('sparepart.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sparepart' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'tanggal_masuk' => 'required|date', // Validasi untuk tanggal masuk
            'deskripsi' => 'nullable|string', // Deskripsi bisa null
        ]);

        Sparepart::create($request->all());

        return redirect()->route('sparepart.index')->with('success', 'Sparepart berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $sparepart = Sparepart::findOrFail($id);
        return view('sparepart.show', compact('sparepart'));
    }

    public function edit(string $id)
    {
        $sparepart = Sparepart::findOrFail($id);
        return view('sparepart.edit', compact('sparepart'));
    }

    public function update(Request $request, string $id)
    {
        $sparepart = Sparepart::findOrFail($id);

        $request->validate([
            'nama_sparepart' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'tanggal_masuk' => 'required|date', // Validasi untuk tanggal masuk
            'tanggal_keluar' => 'nullable|date', // Validasi untuk tanggal keluar
            'deskripsi' => 'nullable|string', // Deskripsi bisa null
        ]);

        $sparepart->update($request->all());

        return redirect()->route('sparepart.index')->with('success', 'Sparepart berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $sparepart = Sparepart::findOrFail($id);
        $sparepart->delete();

        return redirect()->route('sparepart.index')->with('success', 'Sparepart berhasil dihapus');
    }

    
}