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
        Schema::create('vrsusers', function (Blueprint $table) {
            $table->id();
            $table->string('nrp');
            $table->string('password');
            $table->string('email');
            $table->string('otp');
            $table->string('failedlogin');
            $table->string('level');
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
        Schema::dropIfExists('vrsusers');
    }
};
