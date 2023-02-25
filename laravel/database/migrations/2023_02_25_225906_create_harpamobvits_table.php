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
        Schema::create('harpamobvits', function (Blueprint $table) {
            $table->id();
            $table->string('nrp');
            $table->string('input');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('obyek');
            $table->string('jam_start');
            $table->string('jam_end');
            $table->string('situasi');
            $table->longText('rincian');
            $table->longText('personil');
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
        Schema::dropIfExists('harpamobvits');
    }
};
