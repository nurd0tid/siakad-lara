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
        Schema::create('thn_akademiks', function (Blueprint $table) {
            $table->id('id_tahun');
            $table->string('kd_tahun')->unique();
            $table->string('nm_tahun');
            $table->string('ket_tahun');
            $table->enum('stts_tahun', ['Active', 'Non Active']);
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
        Schema::dropIfExists('thn_akademiks');
    }
};
