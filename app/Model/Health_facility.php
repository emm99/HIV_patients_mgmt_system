<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Health_facility extends Model
{
   protected $guarded=[];


    public function district(){
        return $this->belongsTo(District::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }

}

