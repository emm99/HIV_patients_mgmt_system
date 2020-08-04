<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PharmacyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'medicine'=>$this->drug_name,
            'provider'=>$this->user->name,
            'position'=>$this->user->role->name,
            'created_at'=>$this->created_at->diffForHumans(),
        ];
    }
}
