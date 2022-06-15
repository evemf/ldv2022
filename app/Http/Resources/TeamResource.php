<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'nom'=>$this->nom,
            'seu'=>$this->seu,
            'capita'=>$this->capita
            'ciutat'=>$this->ciutat
        ];
    }
}
