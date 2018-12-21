<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidatura extends Model
{
    protected $fillable = [
        'nome',
        'no_bi',
        'mensagem',
    ];
}
