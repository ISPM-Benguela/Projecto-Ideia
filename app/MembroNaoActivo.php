<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembroNaoActivo extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'talao',
        'valor',
    ];
}
