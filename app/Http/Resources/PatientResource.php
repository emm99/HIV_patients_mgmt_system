<?php

namespace App\Http\Resources;

use App\Model\ConsultationPatient;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
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
            'Firstname'=>$this->first_name,
            'Lastname'=>$this->last_name,
            'Gender'=>$this->sex,
            'DOB'=>$this->DOB,
            'Maritialstatus'=>$this->marital_status,
            'Phonenumber'=>$this->phone_no,
            'location_address'=>$this->location_address,
            'Relative_firstname'=>$this->first_name,
            'Relative_lastname'=>$this->last_name,
            'Relative_phone_no'=>$this->phone_no,
            'Relative_location_address'=>$this->location_address,
            // 'consultations'=>ConsultationPatientResource::collection($this->clinic_info->consultation),
            'created_at'=>$this->created_at->diffForHumans()
        ];
    }
}
