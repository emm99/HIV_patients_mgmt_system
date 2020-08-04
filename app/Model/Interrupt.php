<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Interrupt extends Model
{
    public function clinic_info(){
        return $this->hasOne(Clinic_info::class);
    }
}
