<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DepedencyResource extends JsonResource
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
            'firstname'=>$this->first_name,
            'lastname'=>$this->last_name,
            'phone_no'=>$this->phone_no,
            'location_address'=>$this->location_address,
            'created_at'=>$this->created_at->diffForHumans(),
        ];
    }
}
