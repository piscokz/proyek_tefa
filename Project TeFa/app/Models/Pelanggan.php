<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggans'; // Nama tabel
    protected $primaryKey = 'id_pelanggan'; // Primary key
    public $timestamps = true; // Menyimpan created_at dan updated_at

    protected $fillable = [
        'nama_pelanggan',
        'kontak',
    ];

    // Relasi dengan kendaraan
    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class, 'id_pelanggan', 'id_pelanggan');
    }
}