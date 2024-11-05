<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::paginate(10);
        return view('programServis.kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('programServis.kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_polisi' => 'required|string|max:255|unique:kendaraans',
            'merek' => 'required|string|max:255',
            'model' => 'required|string|max:255',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('programServis.kendaraan.show', compact('kendaraan'));
    }

    public function edit(string $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('programServis.kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, string $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        $request->validate([
            'nomor_polisi' => 'required|string|max:255|unique:kendaraans,nomor_polisi,' . $kendaraan->id_kendaraan,
            'merek' => 'required|string|max:255',
            'model' => 'required|string|max:255',
        ]);

        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil dihapus');
    }
}