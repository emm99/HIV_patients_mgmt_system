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
            'Staffname'=>$this->name,
            'email'=>$this->email,
            'Position'=>$this->role->name,
            'created_at'=>$this->created_at->diffForHumans(),
         ];
         //parent::toArray($request);
    }
}
