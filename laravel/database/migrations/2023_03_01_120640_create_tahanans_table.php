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
        Schema::create('tahanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alias');
            $table->string('nama_ayah');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('alamat');
            $table->string('sp_han')->nullable();
            $table->string('kasus');
            $table->string('status');
            $table->string('tanggal_masuk');
            $table->string('tanggal_keluar')->nullable();
            $table->string('penyidik');
            $table->string('nama_penyidik');
            $table->string('lokasi');
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
        Schema::dropIfExists('tahanans');
    }
};
