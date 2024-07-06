<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function coach(){
        return $this->hasOne(Coach::class);
    }

    public function players(){
        return $this->hasMany(Player::class);
    }

    public function games(){
        return $this->belongsToMany(Game::class);
    }
}
