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
            
            // Explicit foreign key reference
            $table->foreignId('id_pelanggan')->constrained('pelanggans', 'id_pelanggan')
                  ->onDelete('cascade'); // Optional: This will delete all related kendaraan when a pelanggan is deleted

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}