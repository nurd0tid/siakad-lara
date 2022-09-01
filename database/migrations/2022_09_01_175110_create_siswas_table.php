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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('nisn', 10)->unique();
            $table->string('nik', 16)->unique();
            $table->string('nm_siswa');
            $table->enum('jenkel', ['Laki - Laki', 'Perempuan']);
            $table->string('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->enum('agama', ['Islam', 'Kristen', 'Hindu', 'Buddha', 'Katolik', 'Khonghucu']);
            $table->string('almt_rumah');
            $table->string('rt_rw');
            $table->string('kd_pos');
            $table->string('kab_kota');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->string('jenis_tinggal');
            $table->string('alat_transportasi');
            $table->string('telpon');
            $table->string('no_hp');
            $table->string('email');
            $table->string('skhun');
            $table->enum('penerima_kjp', ['Ya', 'Tidak']);
            $table->string('foto');
            $table->string('angkatan');
            $table->string('stts_awal');
            $table->enum('stts_siswa', ['Active', 'Non Active']);
            $table->string('tingkat');
            $table->string('kd_kelas');
            $table->string('kd_jurusan');
            $table->string('nm_ayah');
            $table->date('tgl_lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('no_telp_ayah');
            $table->string('nm_ibu');
            $table->date('tgl_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('no_telp_ibu');
            $table->string('nm_wali');
            $table->date('tgl_lahir_wali');
            $table->string('pendidikan_wali');
            $table->string('pekerjaan_wali');
            $table->string('penghasilan_wali');
            $table->string('no_telp_wali');
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
        Schema::dropIfExists('siswas');
    }
};
