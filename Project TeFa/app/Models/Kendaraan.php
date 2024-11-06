<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraans'; // Nama tabel
    protected $primaryKey = 'no_polisi'; // Primary key
    public $timestamps = true; // Menyimpan created_at dan updated_at

    protected $fillable = [
        'jenis_kendaraan',
        'warna',
        'tahun_produksi',
        'kode_mesin',
        'id_pelanggan',
    ];

    // Relasi dengan pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    // Relasi dengan servis
    public function servis()
    {
        return $this->hasMany(Servis::class, 'nomor_polisi', 'no_polisi');
    }
}