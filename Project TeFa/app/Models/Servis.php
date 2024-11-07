<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servis extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'servis';

    // Primary Key
    protected $primaryKey = 'id_servis';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'nomor_polisi',       // Foreign key to 'kendaraans' table
        'keluhan',
        'kilometer_saat_ini',
        'harga_jasa',
        'tanggal_servis',
        'total_biaya',
        'uang_masuk',
        'kembalian',
        'jenis_servis'        // Assuming you added this in the form
    ];

    // Relation with Kendaraan model
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'nomor_polisi', 'no_polisi');
    }

    // You could also add any other relationships, like with Sparepart if needed
}