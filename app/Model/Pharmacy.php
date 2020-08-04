<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{

    protected $guarded=[];

    public function consultation(){
        return $this->hasMany(Consultation::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
