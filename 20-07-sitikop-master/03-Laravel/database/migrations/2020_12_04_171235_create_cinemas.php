<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinemas', function (Blueprint $table) {
            $table->id();
            $table->string('Namacinema');
            $table->string('Lokasi');
            $table->string('file');
            $table->string('JamBuka');
            $table->string('JamTutup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cinemas');
    }
}
