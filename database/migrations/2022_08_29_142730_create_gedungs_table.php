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
        Schema::create('gedungs', function (Blueprint $table) {
            $table->id('id_gedung');
            $table->string('kd_gedung')->unique();
            $table->string('nm_gedung');
            $table->string('jml_lantai');
            $table->string('p_gedung');
            $table->string('t_gedung');
            $table->string('l_gedung');
            $table->string('ket_gedung');
            $table->string('stts_gedung');
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
        Schema::dropIfExists('gedungs');
    }
};
