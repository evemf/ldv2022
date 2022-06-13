<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function team() {
       return $this->hasOne(Team::class, 'equip_id', 'id');
    }

    public function category() {
        return $this->hasOne(Category::class, 'categoria_id', 'id');
    }
}
