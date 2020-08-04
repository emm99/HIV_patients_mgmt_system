<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LabTestResource extends JsonResource
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
            'test'=>$this->test_name,
            'results'=>$this->results,
            'conducted_by'=>$this->user->name,
            'position'=>$this->user->role->name,
            'created_at'=>$this->created_at->diffForHumans()
        ];
    }
}
