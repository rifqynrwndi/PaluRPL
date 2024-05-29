<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBordaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('nama_kost');
            $table->string('fasilitas');
            $table->bigInteger('harga_sewa');
            $table->string('lokasi');
            $table->string('kenyamanan');
            $table->string('keamanan');
            $table->integer('panjangkamar');
            $table->integer('lebarkamar');
            $table->integer('jarak_dari_kampus');
            $table->string('desain_rumah');
            $table->string('gambar');
            $table->double('total');
            $table->integer('rank');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borda');
    }
}
