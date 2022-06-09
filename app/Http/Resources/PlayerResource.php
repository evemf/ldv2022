<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\TeamResource;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\Team;

class PlayerResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nom'=> $this->nom,
            'cognoms' => $this->cognoms,
            'tel' => $this->tel,
            'email' => $this->email,
            'equip' => new TeamResource ($this->equip_id),
            'categoria' => new CategoryResource($this->category_id)
        ];
    }
}
