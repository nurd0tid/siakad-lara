<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThnAkademik extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tahun';
    protected $fillable = [
        'kd_tahun',
        'nm_tahun',
        'ket_tahun',
        'stts_tahun'
    ];
}
