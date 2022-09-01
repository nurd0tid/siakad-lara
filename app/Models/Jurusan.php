<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_jurusan';
    protected $fillable = [
        'kd_jurusan',
        'nm_jurusan',
        'bidang_keahlian',
        'kptsi_umum',
        'kptsi_khusus',
        'nip',
        'jabatan',
        'ket_jurusan',
        'stts_jurusan'
    ];
}
