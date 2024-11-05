<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServisTable extends Migration
{
    public function up()
    {
        Schema::create('servis', function (Blueprint $table) {
            $table->id('id_servis');
            $table->foreignId('nomor_polisi')->constrained('kendaraans', 'no_polisi'); // Pastikan kolom ini sesuai
            $table->string('keluhan');
            $table->integer('kilometer_saat_ini');
            $table->decimal('harga_jasa', 10, 2);
            $table->date('tanggal_servis');
            $table->decimal('total_biaya', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servis');
    }
}