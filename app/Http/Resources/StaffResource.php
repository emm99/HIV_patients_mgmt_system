<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StaffResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return[
             'id'=>$this->id,
            'name'=>$this->name,
            'position'=>$this->role->name,
            'username'=>$this->user_name,
            'health_facility'=>$this->health_facility->name,
            'location_id'=>$this->health_facility->id,
            'email'=>$this->email,
            'district'=>$this->health_facility->district->name,
            'region'=>$this->health_facility->district->region->name,
            'created_at'=>$this->created_at->diffForHumans(),
         ];
         //parent::toArray($request);
    }
}
