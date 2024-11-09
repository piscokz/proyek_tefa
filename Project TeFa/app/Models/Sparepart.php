<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;

    protected $table = 'spareparts'; // Nama tabel
    protected $primaryKey = 'id_sparepart'; // Menentukan primary key yang berbeda dari 'id'

    protected $fillable = [
        'nama_sparepart', 'jumlah', 'harga_beli', 'harga_jual', 'keuntungan', 'tanggal_masuk', 'tanggal_keluar', 'deskripsi'
    ];

    protected $guarded = ['id_sparepart']; // Guard untuk primary key jika diperlukan

    public function servis()
    {
        return $this->belongsToMany(Servis::class)
                    ->withPivot('jumlah');
    }
}