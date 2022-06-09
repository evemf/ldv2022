<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PlayerResource;

class TeamResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nom'=>$this->nom,
            'seu'=>$this->seu,
            'capita'=>new PlayerResource($this->capita_id),
            'created_at'=>$this->created_at
        ];
    }
}
