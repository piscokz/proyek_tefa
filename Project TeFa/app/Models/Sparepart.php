<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;

    protected $table = 'spareparts'; // This is the table the model refers to

    protected $fillable = [
        'nama_sparepart', 'jumlah', 'harga_beli', 'harga_jual', 'keuntungan', 'tanggal_masuk', 'tanggal_keluar', 'deskripsi'
    ];
}