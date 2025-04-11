<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function members()
    {
        return $this->belongsToMany(Member::class)->withPivot('score')->withTimestamps();
    }

}
