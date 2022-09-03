<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepegawaian extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kepegawaian';
    protected $fillable = [
        'nm_kepegawaian',
        'ket_kepegawaian'
    ];
}
