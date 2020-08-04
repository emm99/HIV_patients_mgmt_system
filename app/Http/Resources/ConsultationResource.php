<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConsultationResource extends JsonResource
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
            // 'patient_fname'=>$this->clinic_info->patient->first_name,
            // 'patient_lname'=>$this->clinic_info->patient->last_name,
            // 'stage'=>$this->clinic_info->stage->name,
            // 'drug_allegies'=>$this->clinic_info->drug_allegies,
            'lab_test'=> $this->lab_test->test_name,
            'lab_result'=> $this->lab_test->results,
            'tested_by'=> $this->lab_test->user->name,
            'position'=> $this->lab_test->user->role->name,
            'prescription'=>$this->pharmacy->drug_name,
            'prescribed_by'=>$this->pharmacy->user->name,
            'position'=>$this->pharmacy->user->role->name,
            'next_schedule'=>$this->next_consultation_date,
            'side_effects'=>$this->side_effects,
            'consulted_by'=>$this->user->name,
            'position'=>$this->user->role->name,
            'health_facility_attended'=>$this->user->health_facility->name,
            'health_facility_location'=>$this->user->health_facility->location,
            'district'=>$this->user->health_facility->district->name,
            'region'=>$this->user->health_facility->district->region->name,
            'date_attended'=>$this->created_at->diffForHumans(),
        ];
    }
}
