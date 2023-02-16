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
        Schema::create('pimpinans', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan');
            $table->string('lokasi');
            $table->string('jam_start');
            $table->string('jam_end');
            $table->string('pju');
            $table->string('forkopimda');
            $table->string('tomas');
            $table->string('toga');
            $table->string('todat');
            $table->string('personil');
            $table->longText('rincian');
            $table->date('input');
            $table->string('nrp');
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
        Schema::dropIfExists('pimpinans');
    }
};
