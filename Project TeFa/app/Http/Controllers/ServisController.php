<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Pelanggan;
use App\Models\Kendaraan;
use App\Models\Sparepart;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function create()
    {
        $pelanggans = Pelanggan::all();
        $kendaraans = Kendaraan::all();
        $spareparts = Sparepart::all();

        return view('servis.create', compact('pelanggans', 'kendaraans', 'spareparts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'kontak' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'nomor_polisi' => 'required|string|max:10',
            'jenis_kendaraan' => 'required|string|max:50',
            'warna' => 'nullable|string|max:20',
            'kode_mesin' => 'nullable|string|max:50',
            'tahun_produksi' => 'nullable|integer|min:1900|max:'.date('Y'),
            'keluhan' => 'required|string|max:255',
            'kilometer_saat_ini' => 'required|integer|min:0',
            'harga_jasa' => 'required|numeric',
            'total_biaya' => 'required|numeric',
        ]);

        Servis::create($request->all());

        return redirect()->route('servis.index')->with('success', 'Servis berhasil ditambahkan');
    }
}