<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Kendaraan;
use App\Models\Pelanggan;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServisController extends Controller
{
    // Fungsi untuk menampilkan halaman index servis dengan pagination
    public function index()
    {
        $servis = Servis::paginate(6);
        return view('servis.index', compact('servis'));
    }

    // Fungsi untuk menampilkan halaman form pembuatan servis baru
    public function create()
    {
        $spareparts = Sparepart::all();
        $kendaraans = Kendaraan::all();
        return view('servis.create', compact('spareparts', 'kendaraans'));
    }

    public function store(Request $request)
    {
        // Validasi data dari input pengguna
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'alamat' => 'nullable|string',
            'nomor_polisi' => 'required|string|max:20',
            'jenis_kendaraan' => 'required|string|max:50',
            'warna' => 'nullable|string|max:50',
            'kode_mesin' => 'nullable|string|max:50',
            'tahun_produksi' => 'nullable|string|max:4',
            'keluhan' => 'required|string',
            'kilometer_saat_ini' => 'required|integer',
            'harga_jasa' => 'required|numeric',
            'total_biaya' => 'required|numeric',
            'uang_masuk' => 'required|numeric',
            'sparepart_id' => 'required|array',
            'jumlah' => 'required|array',
            'jenis_servis' => 'required|in:ringan,sedang,berat',
        ]);

        // Mencari atau membuat data Pelanggan berdasarkan nama
        $pelanggan = Pelanggan::firstOrCreate(
            ['nama_pelanggan' => $request->nama_pelanggan],
            ['kontak' => $request->kontak, 'alamat' => $request->alamat]
        );

        // Membuat data Kendaraan dengan ID Pelanggan yang valid
        $kendaraan = Kendaraan::create([
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'warna' => $request->warna,
            'kode_mesin' => $request->kode_mesin,
            'tahun_produksi' => $request->tahun_produksi,
            'id_pelanggan' => $pelanggan->id_pelanggan,
            'no_polisi' => $request->nomor_polisi,
        ]);

        // Menghitung Kembalian dan Total Biaya
        $total_biaya = $request->total_biaya;
        $uang_masuk = $request->uang_masuk;
        $kembalian = $uang_masuk - $total_biaya;

        // Membuat data Servis baru
        $servis = Servis::create([
            'nomor_polisi' => $kendaraan->no_polisi,
            'keluhan' => $request->keluhan,
            'kilometer_saat_ini' => $request->kilometer_saat_ini,
            'harga_jasa' => $request->harga_jasa,
            'total_biaya' => $total_biaya,
            'uang_masuk' => $uang_masuk,
            'kembalian' => $kembalian,
            'jenis_servis' => $request->jenis_servis,
            'tanggal_servis' => $request->tanggal_servis,
        ]);

        // Menghitung total_keuntungan dari sparepart yang digunakan
        $total_keuntungan = 0;
        foreach ($request->sparepart_id as $index => $sparepart_id) {
            // Ambil data sparepart berdasarkan ID
            $sparepart = Sparepart::find($sparepart_id);

            // Hitung keuntungan per sparepart (harga jual - harga beli)
            $keuntungan_per_sparepart = $sparepart->harga_jual - $sparepart->harga_beli;

            // Total keuntungan = keuntungan per sparepart * jumlah yang digunakan
            $total_keuntungan += $keuntungan_per_sparepart * $request->jumlah[$index];

            // Menambahkan sparepart ke dalam data servis
            $serviceSparepart = DB::table('servis_sparepart')->insert([
                'servis_id' => $servis->id,
                'sparepart_id' => $sparepart_id,
                'jumlah' => $request->jumlah[$index],

            ]);

            // Update stock sparepart
            $sparepart->decrement('jumlah', $request->jumlah[$index]);
        }

        // Menambahkan total keuntungan ke dalam data servis
        $servis->update(['total_keuntungan' => $total_keuntungan]);

        // Redirect ke halaman index servis dengan pesan sukses
        return redirect()->route('servis.index')->with('success', 'Servis berhasil ditambahkan!');
    }

    // Add this method to ServisController
    public function show($id)
    {
        // Retrieve the service record by ID
        $servis = Servis::findOrFail($id); // Use findOrFail to handle cases where the ID does not exist

        // Return the view with the service data
        return view('servis.show', compact('servis'));
    }

}