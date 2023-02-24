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
        Schema::create('keluargaberencanas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->date('tanggal');
            $table->string('baru');
            $table->string('lama');
            $table->string('nama');
            $table->string('umur');
            $table->string('alamat');
            $table->string('jumlah_anak');
            $table->string('td_bb');
            $table->date('tanggal_kembali');
            $table->string('metode_kb');
            $table->string('keterangan');
            $table->string('antrian')->nullable();
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('keluargaberencanas');
    }
};
