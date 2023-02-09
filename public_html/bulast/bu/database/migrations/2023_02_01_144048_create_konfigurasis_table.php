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
        Schema::create('konfigurasis', function (Blueprint $table) {
            $table->id();
            $table->string('namasitus');
            $table->string('deskripsi');
            $table->string('gambar');
            $table->string('logo');
            $table->string('peta');
            $table->string('alamatsitus');
            $table->string('fb');
            $table->string('ig');
            $table->string('yt');
            $table->string('tw');
            $table->string('email');
            $table->string('tiktok');
            $table->string('banner');
            $table->string('nomorpengaduan');
            $table->string('youtube_embbed');
            $table->string('ads1');
            $table->string('ads2')->nullable();
            $table->string('ads3')->nullable();
            $table->string('favicon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfigurasis');
    }
};
