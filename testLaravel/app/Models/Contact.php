<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Definisikan tabel jika nama tabel tidak sesuai dengan konvensi
    protected $table = 'contacts';

    // Tentukan field yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'email',
        'title',
        'message',
    ];
}
