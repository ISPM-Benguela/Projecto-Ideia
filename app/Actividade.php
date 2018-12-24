<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    protected $fillable = [
        'titulo',
        'imagem',
        'local',
        'data_inicio',
        'data_termino',
    ];
}
