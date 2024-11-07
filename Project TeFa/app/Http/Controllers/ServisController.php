<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Kendaraan;
use App\Models\Pelanggan;
use App\Models\Sparepart;
use Illuminate\Support\Facades\Log; // Menambahkan Log untuk mencatat informasi atau error
use Illuminate\Http\Request;

class ServisController extends Controller
{
    // Method untuk menampilkan daftar servis dengan paginasi
    public function index()
    {
        $servis = Servis::paginate(10);
        return view('servis.index', compact('servis'));
    }
    
    // Method untuk menampilkan form tambah servis
    public function create()
    {
        $spareparts = Sparepart::all();
        $kendaraans = Kendaraan::all();
        return view('servis.create', compact('spareparts', 'kendaraans'));
    }

    // Method untuk menyimpan data servis baru
    public function store(Request $request)
    {
        // Validasi data request yang masuk
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

        // Mencari atau membuat data pelanggan berdasarkan nama, kontak, dan alamat
        $pelanggan = Pelanggan::firstOrCreate(
            ['nama_pelanggan' => $request->nama_pelanggan],
            ['kontak' => $request->kontak, 'alamat' => $request->alamat]
        );

        // Log untuk memastikan data pelanggan berhasil dibuat
        Log::info('Pelanggan Created:', ['pelanggan' => $pelanggan]);

        // Mengecek apakah ID pelanggan berhasil diberikan
        if (!$pelanggan->id) {
            Log::error('Failed to assign id to Pelanggan.', ['pelanggan' => $pelanggan]);
            return redirect()->back()->with('error', 'Pelanggan creation failed.');
        }

        // Membuat data kendaraan dengan id_pelanggan yang valid
        $kendaraan = Kendaraan::create([
            'no_polisi' => $request->nomor_polisi,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'warna' => $request->warna,
            'kode_mesin' => $request->kode_mesin,
            'tahun_produksi' => $request->tahun_produksi,
            'id_pelanggan' => $pelanggan->id, // Menggunakan id dari pelanggan yang dibuat sebelumnya
        ]);

        // Log untuk memastikan data kendaraan berhasil dibuat
        Log::info('Kendaraan Created:', ['kendaraan' => $kendaraan]);

        // Menghitung kembalian
        $kembalian = $request->uang_masuk - $request->total_biaya;

        // Membuat data servis baru
        $servis = Servis::create([
            'nomor_polisi' => $kendaraan->no_polisi, // Menggunakan nomor polisi sebagai relasi ke Kendaraan
            'keluhan' => $request->keluhan,
            'kilometer_saat_ini' => $request->kilometer_saat_ini,
            'harga_jasa' => $request->harga_jasa,
            'tanggal_servis' => $request->tanggal_servis,
            'total_biaya' => $request->total_biaya,
            'uang_masuk' => $request->uang_masuk,
            'kembalian' => $kembalian,
            'jenis_servis' => $request->jenis_servis,
        ]);

        // Log untuk memastikan data servis berhasil dibuat
        Log::info('Servis Created:', ['servis' => $servis]);

        // Mengurangi jumlah stok sparepart yang digunakan dan menyimpannya di database
        foreach ($request->sparepart_id as $index => $sparepart_id) {
            $sparepart = Sparepart::findOrFail($sparepart_id);
            $requestedAmount = $request->jumlah[$index];
        
            // Mengecek apakah stok sparepart mencukupi
            if ($sparepart->jumlah >= $requestedAmount) {
                $sparepart->jumlah -= $requestedAmount;
                $sparepart->save();
                $servis->spareparts()->attach($sparepart, ['jumlah' => $requestedAmount]);
            } else {
                return redirect()->back()->with('error', 'Stok sparepart tidak cukup.');
            }
        }

        // Jika data servis gagal disimpan
        if (!$servis) {
            return redirect()->back()->with('error', 'Servis gagal disimpan.');
        }
    }

    // Definisi relasi spareparts di model Servis
    public function spareparts()
    {
        return $this->belongsToMany(Sparepart::class)->withPivot('jumlah');
    }

    // Definisi relasi servis di model Sparepart
    public function servis()
    {
        return $this->belongsToMany(Servis::class)->withPivot('jumlah');
    }
}