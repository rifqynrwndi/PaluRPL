<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubkriteriapemilikkostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subkriteriapemilikkost', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kriteriapemilikkost');
            $table->integer('kode');
            $table->string('nama');
            $table->double('bobot');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_kriteriapemilikkost')->references('id')->on('kriteriapemilikkost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subkriteriapemilikkost');
    }
}
