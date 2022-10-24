<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisKontakSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_kontak_siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->unsigned()->references('id')->on('siswa')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('jenis_kontak_id')->unsigned()->references('id')->on('jenis_kontak')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('deskripsi', 255);
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
        Schema::dropIfExists('jenis_kontak_siswa');
    }
}