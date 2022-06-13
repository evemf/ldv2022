<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\TeamResource;
use App\Http\Resources\CategoryResource;

class PlayerResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'nom'=> $this->nom,
            'cognoms' => $this->cognoms,
            'tel' => $this->tel,
            'email' => $this->email,
            'ciutat' => $this->email,
            'equip' => $this->whenLoaded('teams'),
            'categoria' => $this->whenLoaded('categories')
        ];
    }
}
