<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kelas';
    protected $fillable = [
        'kd_kelas',
        'nm_kelas',
        'nip',
        'kd_jurusan',
        'kd_ruangan',
        'stts_kelas'
    ];
}
