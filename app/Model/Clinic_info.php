<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Clinic_info extends Model
{
protected $guarded=[];

public function patient(){
    return $this->belongsTo(Patient::class,'patient_id');
}
public function stage(){
    return $this->belongsTo(Stage::class);
}
public function health_facility(){
    return $this->belongsTo(Health_facility::class,'facility_id');
}
public function user(){
    return $this->belongsTo(User::class);
}
public function status(){
    return $this->belongsTo(Status::class);
}
public function interrupt(){
    return $this->belongsTo(Interrupt::class,'interrupts_id');
}
public function consultation(){
    return $this->hasMany(Consultation::class);
}

}
