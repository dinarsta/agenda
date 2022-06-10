<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendatbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendatbs', function (Blueprint $table) {
            $table->id();
            $table->string('nmguru');
            $table->string('materi');
            $table->enum('mapel', ['pemrograman Dasar', 'Pemodelan Perangkat Lunak', 'Pemrograman Berorientasi Objek', 'Dasar Desain Grafis', 'Basis Data']);
            $table->string('jampel');
            $table->enum('nmkelas', ['X RPL 1', 'X RPL 2', 'XI RPL 1', 'XI RPL 2', 'XII RPL 1', 'XII RPL 2']);
            $table->string('tdkhadir');
            $table->enum('jenispel', ['online', 'offline']);
            $table->string('ket');
            $table->string('dokumen');
            $table->string('link');
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
        Schema::dropIfExists('agendatbs');
    }
}
