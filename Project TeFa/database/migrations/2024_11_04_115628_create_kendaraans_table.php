<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->string('nomor_polisi', 20)->primary(); // Menentukan panjang kolom
            $table->string('jenis_motor');
            $table->string('warna')->nullable();
            $table->year('tahun_produksi')->nullable();
            $table->string('kode_mesin')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}