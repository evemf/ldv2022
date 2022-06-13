<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamCapitan extends Model
{
    use HasFactory;

    public function capita() {
        return $this->belongsTo(Player::class, 'players_categoria_id_foreign', 'id');
    }

    public function equip() {
        return $this->belongsTo(Team::class, 'players_equip_id_foreign', 'id');
    }
}
