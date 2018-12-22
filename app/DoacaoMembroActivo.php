<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class DoacaoMembroActivo extends Model
{
    protected $fillable = [
        'user_id',
        'talao',
        'valor',
    ];

    public function membros(){
        return $this->hasMany(User::class);
    }
}
