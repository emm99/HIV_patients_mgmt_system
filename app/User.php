<?php

namespace App;

use App\Model\Patient;
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
        'name', 'email', 'password','role_id'
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

    public function roles(){
        return $this->belongsTo(Roles::class);
    }

    // public function roles(){
    //     return $this->belongsToMany(Roles::class,'users_roles');
    // }

    // public function hasRole(...$roles){
    //     return $this->roles()->whereIn('slug',$roles)->count();
    //  }

    // public function hasPermissionTo(...$permissions){
    //      return $this->permissions()->whereIn('slug',$permissions)->count() ||
    //      $this->roles()->whereHas('permissions',function ($q) use ($permissions) {
    //          $q->whereIn('slug',$permissions);
    //      })->count();
    //  }

    // public function givePermissionsTo(...$permissions){
    //    $this->permissions()->attach($permissions);
    // }

    // public function setPermissionsTo(...$permissions){
    //     $this->permissions()->sync($permissions);
    //  }

    //  public function detachPermissionsTo(...$permissions){
    //     $this->permissions()->detach($permissions);
    //  }

    // public function permissions(){
    //     return $this->belongsToMany(Permission::class,'users_permissions');
    // }

    public function patient(){
        return $this->hasMany(Patient::class);
    }
      // Rest omitted for brevity

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
        return [];
    }

   public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
