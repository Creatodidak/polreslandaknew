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
        Schema::create('personils', function (Blueprint $table) {
            $table->string('nrp')->unique();
            $table->string('nama');
            $table->string('pangkat');
            $table->string('satker');
            $table->string('satfung');
            $table->string('jabatan');
            $table->date('tanggal_lahir');
            $table->string('foto');
            $table->string('wa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personils');
    }
};
