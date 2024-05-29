<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kost', function (Blueprint $table) {
            $table->id()->softDeletes();
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
            $table->string('tipe_kost');
            $table->string('gambar');
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
        Schema::dropIfExists('kost');
    }
}
