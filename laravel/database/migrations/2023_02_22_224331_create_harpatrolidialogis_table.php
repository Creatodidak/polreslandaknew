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
        Schema::create('harpatrolidialogis', function (Blueprint $table) {
            $table->id();
            $table->string('nrp');
            $table->date('input');
            $table->string('latitude');
            $table->string('longitude');
            $table->longText('personil');
            $table->time('jam_start');
            $table->time('jam_end');
            $table->string('situasi');
            $table->string('topik');
            $table->longText('rincian');
            $table->longText('tanggapan');
            $table->longText('masukan');
            $table->longText('respon');
            $table->string('audiens');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->string('foto5');
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
        Schema::dropIfExists('harpatrolidialogis');
    }
};
