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
        Schema::create('patrolijalanrayas', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('jam');
            $table->string('situasi');
            $table->string('aruslalin');
            $table->longText('personil');
            $table->string('jenis');
            $table->string('nrp');
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
        Schema::dropIfExists('patrolijalanrayas');
    }
};
