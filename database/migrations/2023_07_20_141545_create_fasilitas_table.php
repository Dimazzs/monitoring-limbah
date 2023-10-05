<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pemohon_id');
            $table->foreign('pemohon_id')->references('id')->on('pemohon')->onDelete('cascade');
            $table->string('bangunan');
            $table->string('tangki');
            $table->string('penumpukan_limbah');
            $table->string('jenis_limbah');
            $table->string('simbol_bangunan');
            $table->string('simbol_kemasan');
            $table->string('dinding');
            $table->string('sop');
            $table->string('bak');
            $table->string('ventilasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitas');
    }
};
