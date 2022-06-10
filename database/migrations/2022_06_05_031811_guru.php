<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Guru extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nmguru');
            $table->bigInteger('nikguru');
            $table->enum('mapel', ['pemrograman Dasar', 'Pemodelan Perangkat Lunak', 'Pemrograman Berorientasi Objek', 'Dasar Desain Grafis', 'Basis Data']);
            $table->string('usguru');
            $table->string('pwguru');
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
        Schema::dropIfExists('gurus');
    }
};