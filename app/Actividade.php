<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    protected $fillable = [
        'titulo',
        'local',
        'data_inicio',
        'data_termino',
    ];
}
