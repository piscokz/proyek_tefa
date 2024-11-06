<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Kendaraan;
use App\Models\Pelanggan;
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
    // Validate incoming request data
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

    // Retrieve or create the Pelanggan
    $pelanggan = Pelanggan::firstOrCreate(
        ['nama_pelanggan' => $request->nama_pelanggan],  // Look for existing customer by name
        [
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
        ]
    );

    // Log the ID of the Pelanggan
    \Log::info("Pelanggan ID: " . $pelanggan->id); // This should log the customer ID

    // Ensure id_pelanggan is not null before creating the Kendaraan
    if ($pelanggan->id === null) {
        \Log::error("Error: Pelanggan ID is null. Cannot create Kendaraan.");
        return redirect()->route('servis.index')->with('error', 'Pelanggan tidak ditemukan.');
    }

    // Create the new Kendaraan
    $kendaraan = Kendaraan::create([
        'no_polisi' => $request->nomor_polisi,
        'jenis_kendaraan' => $request->jenis_kendaraan,
        'warna' => $request->warna,
        'kode_mesin' => $request->kode_mesin,
        'tahun_produksi' => $request->tahun_produksi,
        'id_pelanggan' => $pelanggan->id, // Make sure you're passing the correct ID
    ]);

    // Create the Servis
    Servis::create([
        'nama_pelanggan' => $request->nama_pelanggan,
        'kontak' => $request->kontak,
        'alamat' => $request->alamat,
        'kendaraan_id' => $kendaraan->id,
        'keluhan' => $request->keluhan,
        'kilometer_saat_ini' => $request->kilometer_saat_ini,
        'harga_jasa' => $request->harga_jasa,
        'sparepart_id' => $request->sparepart_id,
        'jumlah' => $request->jumlah,
    ]);

    return redirect()->route('servis.index')->with('success', 'Servis berhasil ditambahkan.');
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