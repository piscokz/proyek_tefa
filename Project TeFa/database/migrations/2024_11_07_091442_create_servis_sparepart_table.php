<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServisSparepartTable extends Migration
{
    public function up()
    {
        Schema::create('servis_sparepart', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->foreignId('servis_id')  // Foreign key to Servis
                ->constrained('servis', 'id_servis')
                ->onDelete('cascade');
            $table->foreignId('sparepart_id')  // Foreign key to Spareparts
                ->constrained('spareparts', 'id_sparepart')
                ->onDelete('cascade');
            $table->integer('jumlah');  // Quantity of spare parts used
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servis_sparepart');
    }
}