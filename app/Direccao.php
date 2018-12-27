<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccao extends Model
{
    protected $fillable = [
        'nome',
        'titulo',
    ];
}
