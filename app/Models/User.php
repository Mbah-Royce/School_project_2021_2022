<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [   
        'email',
        'password',
        'first_name',
        'last_name',
        'dob',
        'gender',
        'phone',
        'profile_picture',
        'current_address',
        'state',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

/************************** mutatores and accesssors ******************************/

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] =  Hash::make($value);
    }

    // public function setProfilePictureAttribute($value)
    // {
    //     if($value){
    //         $path = "public/users/" . auth()->user()->id ."/profile_picture";
    //         $path = imageUpload($path,$value);
    //     }
    //     $this->attributes['profile_picture'] =  Hash::make($value);
    // }

/************************** relationships ******************************/

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user')->withTimestamps();
    }

    public function student()
    {
        return $this->hasMany(student::class);
    }

    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
/************************** user methods ******************************/

    public function giveRoleTo(... $roles) {

        $roles = $this->getAllRoles($roles);
        if($roles === null) {
          return $this;
        }
        $this->roles()->attach($roles);
        return $this;
    }

    public function revokeRoleTo(... $roles) {

        $roles = $this->getAllRoles($roles);
        if($roles === null) {
          return $this;
        }
        $this->roles()->detach($roles);
        return $this;
    }

    protected function getAllRoles(array $roles) {

        return Role::whereIn('name',$roles)->get();
        
    }

    public function hasRole(...$roles)
    {

        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }

    public function hasPermissionThroughRole($permission)
    {

        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }

    protected function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('slug', $permissions)->get();
    }
}
