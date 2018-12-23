<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoacaoMembroNaoActivo extends Model
{
    protected $fillable = [
        'nome',
        'talao',
        'valor',
        'telefone',
    ];
}
