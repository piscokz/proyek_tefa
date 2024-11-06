<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Kendaraan;
use App\Models\Pelanggan; // Add this line to import the Pelanggan model
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

        // Check if the customer already exists in the database by name or create a new one
        $pelanggan = Pelanggan::firstOrCreate(
            ['nama_pelanggan' => $request->nama_pelanggan],  // Check if customer exists
            [
                'kontak' => $request->kontak,
                'alamat' => $request->alamat,
            ]
        );

        // Check if the Pelanggan has been created successfully
        if (!$pelanggan->id) {
            return back()->withErrors('Pelanggan not found or created.');
        }

        // Log the Pelanggan ID to confirm it's set
        \Log::info("Pelanggan ID: " . $pelanggan->id);

        // Create a new vehicle entry and associate it with the Pelanggan
        $kendaraan = Kendaraan::create([
            'no_polisi' => $request->nomor_polisi,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'warna' => $request->warna,
            'kode_mesin' => $request->kode_mesin,
            'tahun_produksi' => $request->tahun_produksi,
            'id_pelanggan' => $pelanggan->id,  // Ensure the correct ID is passed
        ]);

        // Create the service entry with the vehicle ID
        Servis::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'kendaraan_id' => $kendaraan->id, // Associate the service with the new vehicle
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