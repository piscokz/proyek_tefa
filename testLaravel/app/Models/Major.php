<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    // Nama tabel jika berbeda dengan penamaan konvensi
    protected $table = 'majors'; 

    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'code',
        'name',
        'image',
        'description',
    ];

    // Jika ingin menyesuaikan nama kolom kunci utama (primary key)
    // protected $primaryKey = 'id';

    // Jika tidak menggunakan timestamps (created_at dan updated_at)
    // public $timestamps = false;
}
