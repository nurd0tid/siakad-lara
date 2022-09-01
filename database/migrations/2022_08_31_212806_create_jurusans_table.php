<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusans', function (Blueprint $table) {
            $table->id('id_jurusan');
            $table->string('kd_jurusan')->unique();
            $table->string('nm_jurusan');
            $table->string('bidang_keahlian');
            $table->string('kptsi_umum');
            $table->string('kptsi_khusus');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('ket_jurusan');
            $table->string('stts_jurusan');
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
        Schema::dropIfExists('jurusans');
    }
};
