<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggans'; // Table name
    protected $primaryKey = 'id_pelanggan'; // Primary key
    public $timestamps = true; // Automatically manage created_at and updated_at timestamps

    protected $fillable = [
        'nama_pelanggan',
        'kontak',
    ];

    // Relationship with Kendaraan
    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class, 'id_pelanggan', 'id_pelanggan');
    }
}