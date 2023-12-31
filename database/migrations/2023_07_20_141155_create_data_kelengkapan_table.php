<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kelengkapan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pemohon_id');
            $table->foreign('pemohon_id')->references('id')->on('pemohon')->onDelete('cascade');
            $table->string('surat');
            $table->string('akta');
            $table->string('npwp');
            $table->string('ktp');
            $table->string('doc_penyimpanan');
            $table->string('doc_pengemasan');
            $table->string('doc_perizinan');
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
        Schema::dropIfExists('data_kelengkapan');
    }
};
