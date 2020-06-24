<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('wisata_id');
            $table->integer('kota_id');
            $table->string('nama_event');
            $table->string('alamat_event');
            $table->text('deskripsi_event');
            $table->date('tanggal_mulai_event');
            $table->date('tanggal_selesai_event');
            $table->string('htm_event');
            $table->enum('status_event',['belum mulia', 'sedang berlangsung', 'selesai']);
            $table->integer('kuota');
            $table->string('foto_event');
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
        Schema::dropIfExists('event');
    }
}
