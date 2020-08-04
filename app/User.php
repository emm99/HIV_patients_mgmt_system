<?php

namespace App;

use App\Model\Clinic_info;
use App\Model\Consultation;
use App\Model\Health_facility;
use App\Model\LabTest;
use App\Model\Patient;
use App\Model\Pharmacy;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','user_name', 'password','role_id','health_facility_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo(Role::class,'role_id','id');
    }

    public function consultation(){
        return $this->hasMany(Consultation::class);
    }

    public function health_facility(){
        return $this->belongsTo(Health_facility::class);
    }


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return  [
            'role'=>$this->role_id,
            'location_id'=>$this->health_facility_id,
        ];
    }

   public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
