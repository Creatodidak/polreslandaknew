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
        Schema::create('lapsits', function (Blueprint $table) {
            $table->id();
            $table->string('input');
            $table->string('nrp');
            $table->string('bidang');
            $table->string('lokasi');
            $table->string('judul');
            $table->longText('fakta');
            $table->longText('rekomendasi');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->string('foto5');
            $table->string('status');
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
        Schema::dropIfExists('lapsits');
    }
};
