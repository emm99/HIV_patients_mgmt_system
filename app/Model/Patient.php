<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    // protected $fillable = [
    //     'name', 'email', 'password','role_id'
    // ];
    protected $guarded = [];

  public function dependency(){
      return $this->belongsTo(Dependency::class);
  }

}
