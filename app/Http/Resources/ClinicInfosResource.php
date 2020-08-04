<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClinicInfosResource extends JsonResource
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
            'patient_firstname'=>$this->patient->first_name,
            'patient_lastname'=>$this->patient->last_name,
            'stage'=>$this->stage->name,
            'registered_by'=>$this->user->name,
            'Position'=>$this->user->role->name,
            'health_facility_registered'=>$this->health_facility->name,
            'health_facility_location'=>$this->health_facility->location,
            'district'=>$this->user->health_facility->district->name,
            'region'=>$this->user->health_facility->district->region->name,
            'status'=>$this->status->name,
            'interruption'=>$this->interrupt->name,
            'consultations'=>ConsultationResource::collection($this->consultation),
            'created_at'=>$this->created_at->diffForHumans(),
        ];
    }
}
