<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ruangan';
    protected $fillable = [
        'kd_ruangan',
        'kd_gedung',
        'nm_ruangan',
        'kps_belajar',
        'kps_ujian',
        'ket_ruangan',
        'stts_ruangan'
    ];
}
