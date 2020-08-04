<?php

namespace App\Model;


use App\User;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function pharmacy(){
        return $this->belongsTo(Pharmacy::class);
    }
    public function lab_test(){
        return $this->belongsTo(LabTest::class);
    }

}
