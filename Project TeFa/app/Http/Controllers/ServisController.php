<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Kendaraan;
use App\Models\Pelanggan;
use App\Models\Sparepart;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function index()
    {
        $servis = Servis::paginate(10);
        return view('servis.index', compact('servis'));
    }
    
    public function create()
    {
        $spareparts = Sparepart::all();
        $kendaraans = Kendaraan::all();
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
            'total_biaya' => 'required|numeric',
            'uang_masuk' => 'required|numeric',
            'sparepart_id' => 'required|array',
            'jumlah' => 'required|array',
            'jenis_servis' => 'required|in:ringan,sedang,berat',
        ]);
        

        // Attempt to find or create the Pelanggan record
        $pelanggan = Pelanggan::firstOrCreate(
            ['nama_pelanggan' => $request->nama_pelanggan],
            ['kontak' => $request->kontak, 'alamat' => $request->alamat]
        );

        // Log to ensure we have the id
        Log::info('Pelanggan ID:', ['id' => $pelanggan->id]);

        if (!$pelanggan || !$pelanggan->id) {
            return redirect()->back()->withErrors(['error' => 'Failed to create or find Pelanggan.']);
        }

        // Create Kendaraan with valid id_pelanggan
        $kendaraan = Kendaraan::create([
            'no_polisi' => $request->nomor_polisi,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'warna' => $request->warna,
            'kode_mesin' => $request->kode_mesin,
            'tahun_produksi' => $request->tahun_produksi,
            'id_pelanggan' => $pelanggan->id,
        ]);

        $kembalian = $request->uang_masuk - $request->total_biaya;

        // Proceed with creating the Servis
        $servis = Servis::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'kendaraan_id' => $kendaraan->id,
            'keluhan' => $request->keluhan,
            'kilometer_saat_ini' => $request->kilometer_saat_ini,
            'harga_jasa' => $request->harga_jasa,
            'total_biaya' => $request->total_biaya,
            'uang_masuk' => $request->uang_masuk,
            'kembalian' => $kembalian,
            'jenis_servis' => $request->jenis_servis,  // Include jenis_servis here
        ]);


        // Attach spare parts to the servis
        foreach ($request->sparepart_id as $index => $sparepart_id) {
            $servis->spareparts()->attach($sparepart_id, ['jumlah' => $request->jumlah[$index]]);
        }

        return redirect()->route('servis.index')->with('success', 'Servis berhasil ditambahkan.');
    }
}