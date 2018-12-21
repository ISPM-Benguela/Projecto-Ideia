<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoacaoNaoActivo extends Model
{
    protected $fillable = [
        'nome',
        'talao',
        'valor',
    ];
}
