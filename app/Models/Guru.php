<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_guru';
    protected $fillable = [
        'nip',
        'nik',
        'nm_guru',
        'jenkel',
        'tmpt_lahir',
        'tgl_lahir',
        'almt_jalan',
        'rt_rw',
        'kab_kota',
        'kelurahan',
        'kecamatan',
        'provinsi',
        'kd_pos',
        'no_telp',
        'no_hp',
        'email',
        'agama',
        'niy_nigk',
        'nuptk',
        'id_kepegawaian',
        'id_ptk',
        'pengawas_bidang_studi',
        'tugas_tambahan',
        'stts_guru',
        'sk_cpns',
        'tgl_cpns',
        'sk_pengangkatan',
        'tmt_pengangkatan',
        'lembaga_pengangkatan',
        'id_golongan',
        'keahlian_laboratorium',
        'sumber_gaji',
        'nm_ibu',
        'stts_pernikahan',
        'nm_suami_istri',
        'nip_suami_istri',
        'pekerjaan_suami_istri',
        'tmt_pns',
        'lisensi_kepsek',
        'jml_sklh_binaan',
        'diklat_kepengawasan',
        'keahlian_breile',
        'keahlian_bahasa_isyarat',
        'npwp',
        'kewarganegaraan',
        'foto'
    ];
}
