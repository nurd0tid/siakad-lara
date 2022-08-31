<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ptk';
    protected $fillable = [
        'nm_ptk',
        'ket_ptk'
    ];
}
