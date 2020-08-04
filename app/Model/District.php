<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
  public function region(){
      return $this->belongsTo(Region::class);
  }
}
