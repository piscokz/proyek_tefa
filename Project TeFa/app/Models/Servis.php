<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servis extends Model
{
    use HasFactory;

    protected $table = 'servis'; // Nama tabel di database

    protected $fillable = [
        'nama_pelanggan',
        'kontak',
        'alamat',
        'nomor_polisi',
        'jenis_kendaraan',
        'warna',
        'kode_mesin',
        'tahun_produksi',
        'keluhan',
        'kilometer_saat_ini',
        'harga_jasa',
        'total_biaya',
    ];

    public function spareparts()
    {
        return $this->belongsToMany(Sparepart::class, 'servis_sparepart', 'servis_id', 'sparepart_id')->withPivot('jumlah');
    }
}