<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_sparepart',
        'jumlah',
        'harga_beli',
        'harga_jual',
        'keuntungan',
        'tanggal_masuk',
        'tanggal_keluar',
        'deskripsi',
    ];

    public function servis()
    {
        return $this->belongsToMany(Servis::class)->withPivot('jumlah');
    }
}
