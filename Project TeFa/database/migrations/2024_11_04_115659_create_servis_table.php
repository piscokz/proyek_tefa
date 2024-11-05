<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServisTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('servis')) { // Cek apakah tabel sudah ada
            Schema::create('servis', function (Blueprint $table) {
                $table->id('id_servis');
                $table->unsignedBigInteger('id_pelanggan'); // Pastikan ini cocok dengan `pelanggans`
                $table->string('nomor_polisi'); // Pastikan ini cocok dengan `kendaraans`
                $table->string('keluhan');
                $table->integer('kilometer_saat_ini');
                $table->decimal('harga_jasa', 10, 2);
                $table->date('tanggal_servis')->default(now());
                $table->decimal('total_biaya', 10, 2);
                $table->timestamps();

                // Kunci asing
                $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggans')->onDelete('cascade');
                $table->foreign('nomor_polisi')->references('nomor_polisi')->on('kendaraans')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('servis');
    }
}
