<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use App\Models\Sparepart;

class ServisController extends Controller
{
    public function index()
    {
        $servis = Servis::paginate(10); // 10 items per page
        return view('servis.index', compact('servis'));
    }
    

    public function create()
    {
        // Retrieve all spare parts from the 'spareparts' table
        $spareparts = Sparepart::all(); // Fetch spare parts

        // Retrieve all vehicles from the 'kendaraans' table if needed
        $kendaraans = Kendaraan::all();

        // Pass both variables to the view
        return view('servis.create', compact('spareparts', 'kendaraans'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomor_polisi' => 'required|string|max:20',
            'jenis_kendaraan' => 'required|string|max:50',
            'warna' => 'required|string|max:50',
            'kode_mesin' => 'required|string|max:50',
            'tahun_produksi' => 'required|string|max:4',
            'keluhan' => 'required|string',
            'kilometer_saat_ini' => 'required|integer',
            'harga_jasa' => 'required|numeric',
            'sparepart_id' => 'required|array',
            'jumlah' => 'required|array',
        ]);

        Servis::create($request->all());
        return redirect()->route('servis.index')->with('success', 'Servis berhasil ditambahkan.');
    }

    public function show($id)
    {
        $servis = Servis::findOrFail($id);
        return view('servis.show', compact('servis'));
    }

    public function edit($id)
    {
        $servis = Servis::findOrFail($id);
        $spareparts = Sparepart::all(); // Ambil semua sparepart untuk dropdown
        return view('servis.edit', compact('servis', 'spareparts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomor_polisi' => 'required|string|max:20',
            'jenis_kendaraan' => 'required|string|max:50',
            'warna' => 'required|string|max:50',
            'kode_mesin' => 'required|string|max:50',
            'tahun_produksi' => 'required|string|max:4',
            'keluhan' => 'required|string',
            'kilometer_saat_ini' => 'required|integer',
            'harga_jasa' => 'required|numeric',
            'sparepart_id' => 'required|array',
            'jumlah' => 'required|array',
        ]);

        $servis = Servis::findOrFail($id);
        $servis->update($request->all());
        return redirect()->route('servis.index')->with('success', 'Servis berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $servis = Servis::findOrFail($id);
        $servis->delete();
        return redirect()->route('servis.index')->with('success', 'Servis berhasil dihapus.');
    }
}