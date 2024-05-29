<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubkriteriamahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subkriteriamahasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kriteriamahasiswa');
            $table->integer('kode');
            $table->string('nama');
            $table->double('bobot');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_kriteriamahasiswa')->references('id')->on('kriteriamahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subkriteriamahasiswa');
    }
}
