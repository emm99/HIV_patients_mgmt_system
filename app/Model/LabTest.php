<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
