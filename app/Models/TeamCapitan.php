<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamCapitan extends Model
{
    use HasFactory;

    public function capita() {
        return $this->belongsTo(Player::class, 'capita_id', 'id');
    }

    public function equip() {
        return $this->belongsTo(Team::class, 'equip_id', 'id');
    }
}
