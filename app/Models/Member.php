<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function games()
    {
        return $this->belongsToMany(Game::class)->withPivot('score')->withTimestamps();
    }

}
