<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_gedung';
    protected $fillable = [
        'kd_gedung',
        'nm_gedung',
        'jml_lantai',
        'p_gedung',
        't_gedung',
        'l_gedung',
        'ket_gedung',
        'stts_gedung'
    ];
}
