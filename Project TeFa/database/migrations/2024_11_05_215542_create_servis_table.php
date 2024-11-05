<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServisTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('servis'); // Drop table if it exists before creating a new one
        Schema::create('servis', function (Blueprint $table) {
            $table->id('id_servis');
            $table->foreignId('nomor_polisi')->constrained('kendaraans', 'no_polisi');
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