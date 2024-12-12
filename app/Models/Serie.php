<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
//    protected $table = 'series';
    protected $fillable = [
        'nome',
        'favorito',
        'numero-temporadas',
        'episodios-temporada'
    ];
}
