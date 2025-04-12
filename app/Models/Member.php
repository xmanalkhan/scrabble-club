<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'joined_at'];

    protected $casts = [
        'joined_at' => 'datetime',
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class)->withPivot('score')->withTimestamps();
    }
}
