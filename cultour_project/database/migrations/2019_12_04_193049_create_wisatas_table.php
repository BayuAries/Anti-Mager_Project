<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('akun_id');
            $table->integer('kota_id');
            $table->string('nama_wisata');
            $table->string('alamat_wisata');
            $table->text('deskripsi_wisata');
            $table->string('jadwal_wisata');
            $table->string('htm_wisata');
            $table->enum('status_wisata',['diterima', 'ditunda']);
            $table->string('foto_wisata');
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
        Schema::dropIfExists('wisata');
    }
}
