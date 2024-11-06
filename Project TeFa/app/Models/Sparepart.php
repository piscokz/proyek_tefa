<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;

    protected $table = 'spareparts';
    protected $primaryKey = 'id_sparepart'; // Specify custom primary key
    protected $fillable = [
        'nama_sparepart',
        'jumlah',
        'harga_beli',
        'harga_jual',
        'keuntungan',
        'tanggal_masuk',
        'deskripsi',
    ];

    public function servis()
    {
        return $this->belongsToMany(Servis::class, 'servis_sparepart', 'sparepart_id', 'servis_id');
    }
}
