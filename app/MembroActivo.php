<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class MembroActivo extends Model
{
    protected $fillable = [
        'user_id',
        'talao',
        'valor',
        
    ];

    public function membro()
    {
        return $this->belongsTo(User::class);
    }
}
