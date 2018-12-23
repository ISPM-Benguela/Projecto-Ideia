<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembroActivo extends Model
{
    protected $fillable = [
        'user_id',
        'talao',
        'valor',
        
    ];
}
