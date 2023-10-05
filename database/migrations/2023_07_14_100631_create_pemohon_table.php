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
        Schema::create('pemohon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_pengguna_id');
            $table->foreign('profile_pengguna_id')->references('id')->on('profile_pengguna')->onDelete('cascade');
            $table->string('name');
            $table->string('jabatan');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('kegiatan');
            $table->string('jenis_limbah');
            $table->string('jumlah_limbah');
            $table->enum('status', ['menunggu', 'diterima', 'ditolak'])->default('menunggu');
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
        Schema::dropIfExists('pemohon');
    }
};
