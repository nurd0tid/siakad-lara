<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_golongan';
    protected $fillable = [
        'nm_golongan',
        'ket_golongan'
    ];
}
