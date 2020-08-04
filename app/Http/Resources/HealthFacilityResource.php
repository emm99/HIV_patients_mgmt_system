<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HealthFacilityResource extends JsonResource
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
            'name'=>$this->name,
            'location'=>$this->location,
            'district'=>$this->district->name,
            'region'=>$this->district->region->name,
            'staffs'=>StaffResource::collection($this->user),
            // 'created_at'=>$this->created_at->diffForHumans(),
        ];
    }
}
