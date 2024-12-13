<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
    protected $with = ['temporadas'];

    public function temporadas()
    {
        return $this->hasMany(Season::class, 'series_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome');
        });
    }
}
