<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Perfil extends Model
{
    protected $fillable = [
        'user_id',
        'tipo',
    ];

    public function membro()
    {
        return $this->belongsTo(User::class);
    }
}
