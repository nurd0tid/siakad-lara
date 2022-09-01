<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_siswa';
    protected $fillabel   = [
        'nisn',
        'nik',
        'nm_siswa',
        'jenkel',
        'tmpt_lahir',
        'tgl_lahir',
        'agama',
        'almt_rumah',
        'rt_rw',
        'kd_pos',
        'kab_kota',
        'kelurahan',
        'kecamatan',
        'provinsi',
        'jenis_tinggal',
        'alat_transportasi',
        'telpon',
        'no_hp',
        'email',
        'skhun',
        'penerima_kjp',
        'foto',
        'angkatan',
        'stts_awal',
        'stts_siswa',
        'tingkat',
        'kd_kelas',
        'kd_jurusan',
        'nm_ayah',
        'tgl_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'no_telp_ayah',
        'nm_ibu',
        'tgl_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'no_telp_ibu',
        'nm_wali',
        'tgl_lahir_wali',
        'pendidikan_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'no_telp_wali'
    ];
}
