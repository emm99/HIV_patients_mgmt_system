<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    public function clinic_info(){
        return $this->hasMany(Clinic_info::class);
    }
}
