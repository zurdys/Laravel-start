<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
//    protected $table = 'series';
    protected $fillable = [
        'nome',
        'favorito',
        'numero_temporadas',
        'episodios_temporada'
    ];

}
