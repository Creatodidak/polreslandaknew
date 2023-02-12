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
        Schema::create('epustakas', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('nomor');
            $table->string('tentang');
            $table->string('satker');
            $table->string('satfung');
            $table->string('tanggal');
            $table->string('validasi');
            $table->string('uploader');
            $table->string('file');
            $table->string('qrfile');

            
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
        Schema::dropIfExists('epustakas');
    }
};
