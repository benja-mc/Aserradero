<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madera extends Model
{
    use HasFactory;

    protected $fillable = [
        'especie',
        'diametro',
        'volumen'
    ];
}
