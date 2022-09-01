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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id('id_guru');
            $table->string('nip', 18)->unique();
            $table->string('nik', 16)->unique();
            $table->string('nm_guru');
            $table->enum('jenkel', ['Laki - Laki', 'Perempuan']);
            $table->string('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->string('almt_jalan');
            $table->string('rt_rw');
            $table->string('kab_kota');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->string('kd_pos');
            $table->string('no_telp');
            $table->string('no_hp');
            $table->string('email');
            $table->enum('agama', ['Islam', 'Kristen', 'Hindu', 'Buddha', 'Katolik', 'Khonghucu']);
            $table->string('niy_nigk', 50)->unique();
            $table->string('nuptk', 50)->unique();
            $table->string('id_kepegawaian');
            $table->string('id_ptk');
            $table->string('pengawas_bidang_studi');
            $table->string('tugas_tambahan')->nullable();
            $table->enum('stts_guru', ['Active', 'Non Active']);
            $table->string('sk_cpns')->unique();
            $table->date('tgl_cpns');
            $table->string('sk_pengangkatan');
            $table->date('tmt_pengangkatan');
            $table->string('lembaga_pengangkatan');
            $table->string('id_golongan');
            $table->string('keahlian_laboratorium')->nullable();
            $table->string('sumber_gaji');
            $table->string('nm_ibu');
            $table->enum('stts_pernikahan', ['Menikah', 'Belum Menikah']);
            $table->string('nm_suami_istri');
            $table->string('nip_suami_istri')->nullable();
            $table->string('pekerjaan_suami_istri')->nullable();
            $table->date('tmt_pns');
            $table->string('lisensi_kepsek');
            $table->string('jml_sklh_binaan')->nullable();
            $table->enum('diklat_kepengawasan', ['Ya', 'Tidak']);
            $table->string('keahlian_breile')->nullable();
            $table->string('keahlian_bahasa_isyarat')->nullable();
            $table->string('npwp')->unique();
            $table->string('kewarganegaraan');
            $table->string('foto');
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
        Schema::dropIfExists('gurus');
    }
};
