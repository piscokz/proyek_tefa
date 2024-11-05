<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servis extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_servis';
    protected $fillable = ['id_pelanggan', 'nomor_polisi', 'keluhan', 'kilometer_saat_ini', 'harga_jasa', 'tanggal_servis', 'total_biaya'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'nomor_polisi');
    }
}