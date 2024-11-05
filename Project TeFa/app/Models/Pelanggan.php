<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pelanggan';

    protected $fillable = ['nama_pelanggan', 'kontak', 'alamat'];

    public function kendaraans()
    {
        return $this->hasMany(Kendaraan::class, 'id_pelanggan');
    }
}