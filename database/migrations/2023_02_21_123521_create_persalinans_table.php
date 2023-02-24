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
        Schema::create('persalinans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('no_registrasi');
            $table->string('nama');
            $table->string('umur');
            $table->string('hari');
            $table->date('ttl');
            $table->string('pukul');
            $table->string('jk');
            $table->string('bb_pb');
            $table->string('paritas');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('keterangan');
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
        Schema::dropIfExists('persalinans');
    }
};
