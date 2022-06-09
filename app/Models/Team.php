<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function players() {
        return $this->hasMany(Player::class, 'equip_id');
    }

    public function capita() {
        return $this->hasOne(Player::class, 'capita_id');
    }
}
