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
        Schema::create('pemeriksaan_awal_kehamilan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('umur');
            $table->string('paritas');
            $table->string('anak_perkecil');
            $table->string('td/bb');
            $table->string('hasil_pemeriksaan');
            $table->string('keterangan')->nullable();
            $table->longText('alamat');
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
        Schema::dropIfExists('pemeriksaan_awal_kehamilan');
    }
};
