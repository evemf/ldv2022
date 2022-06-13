<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamCapitanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'equip_id'=>new TeamResource($this->id),
            'capita_id'=>new PlayerResource($this->id)
        ];
    }
}
