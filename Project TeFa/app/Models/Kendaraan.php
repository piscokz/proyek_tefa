<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $primaryKey = 'nomor_polisi';
    public $incrementing = false;

    protected $fillable = ['jenis_motor', 'warna', 'tahun_produksi', 'kode_mesin', 'id_pelanggan'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }
}