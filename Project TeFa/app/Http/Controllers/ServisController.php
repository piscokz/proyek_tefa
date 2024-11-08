<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Kendaraan;
use App\Models\Pelanggan;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ServisController extends Controller
{
    public function index()
    {
        $servis = Servis::paginate(6);
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
            'alamat' => 'nullable|string',  // Make alamat optional
            'nomor_polisi' => 'required|string|max:20',
            'jenis_kendaraan' => 'required|string|max:50',
            'warna' => 'nullable|string|max:50',  // Make warna optional
            'kode_mesin' => 'nullable|string|max:50',  // Make kode_mesin optional
            'tahun_produksi' => 'nullable|string|max:4',  // Make tahun_produksi optional
            'keluhan' => 'required|string',
            'kilometer_saat_ini' => 'required|integer',
            'harga_jasa' => 'required|numeric',
            'total_biaya' => 'required|numeric',
            'uang_masuk' => 'required|numeric',
            'sparepart_id' => 'required|array',
            'jumlah' => 'required|array',
            'jenis_servis' => 'required|in:ringan,sedang,berat',
        ]);        

        // Find or create Pelanggan
        $pelanggan = Pelanggan::firstOrCreate(
            ['nama_pelanggan' => $request->nama_pelanggan],
            ['kontak' => $request->kontak, 'alamat' => $request->alamat]
        );

        // Ensure pelanggan ID is valid
        if (!$pelanggan->exists || !$pelanggan->id) {
            return back()->withErrors(['Pelanggan could not be created.']);
        }

        // Create Kendaraan using a valid pelanggan ID
        $kendaraan = Kendaraan::create([
            'no_polisi' => $request->nomor_polisi,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'warna' => $request->warna,
            'kode_mesin' => $request->kode_mesin,
            'tahun_produksi' => $request->tahun_produksi,
            'id_pelanggan' => $pelanggan->id,  // Assign valid pelanggan ID
        ]);

        // Calculate Kembalian and Total Biaya
        $total_biaya = $request->total_biaya;
        $uang_masuk = $request->uang_masuk;
        $kembalian = $uang_masuk - $total_biaya;

        // Create Servis record
        $servis = Servis::create([
            'nomor_polisi' => $kendaraan->no_polisi,  // Use the correct foreign key
            'keluhan' => $request->keluhan,
            'kilometer_saat_ini' => $request->kilometer_saat_ini,
            'harga_jasa' => $request->harga_jasa,
            'total_biaya' => $total_biaya,
            'uang_masuk' => $uang_masuk,
            'kembalian' => $kembalian,
            'jenis_servis' => $request->jenis_servis,
            'tanggal_servis' => $request->tanggal_servis,
        ]);

        // Save the spare parts in the pivot table (many-to-many relationship)
        $spareparts = $request->sparepart_id;
        $jumlah_spareparts = $request->jumlah;
        foreach ($spareparts as $index => $sparepart_id) {
            $servis->spareparts()->attach($sparepart_id, [
                'jumlah' => $jumlah_spareparts[$index],
            ]);
        }

        return redirect()->route('servis.index')->with('success', 'Servis has been added successfully!');
    }
}