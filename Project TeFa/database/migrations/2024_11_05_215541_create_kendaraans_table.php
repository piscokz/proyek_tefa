<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id('no_polisi'); // This will create a BIGINT as the primary key
            $table->string('jenis_kendaraan');
            $table->string('warna')->nullable();
            $table->string('tahun_produksi')->nullable();
            $table->string('kode_mesin')->nullable();
            $table->foreignId('id_pelanggan')  // Foreign key to Pelanggan
                ->constrained('pelanggans', 'id_pelanggan')  // Link it to the id_pelanggan column in the pelanggans table
                ->onDelete('cascade');
            $table->timestamps();   
        });
    }

    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}