<?php

namespace App\Models;

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
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scores()
    {
        return $this->hasMany('App\Models\Score', 'archer_id');
    }

    public function rounds()
    {
        return $this->hasMany('App\Models\Round');
    }

    public function events()
    {
        return $this->hasMany('App\Models\Events');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role')->withTimestamps();
    }


    /**
     * Check if the user has the indicated role.
     *
     * @param roleName The role name to check for.
     * @return true If the user has the indicated role.
     */
    public function hasRole($roleName)
    {
        $role = $this->roles()->where('name', '=', $roleName)->first();
        if ($role != null) {
            return true;
        }
        
        return false;
    }


    /**
     *
     */
    public function doesNotHaveRole($roleName)
    {
        return(!$this->hasRole($roleName));
    }

    /**
     * Check if the user has any of the indicated roles.
     *
     * @param roleNamesToCheck An array of role names to check for.
     * @return true If the user has any of the roles.
     */
    public function hasAnyRole($roleNamesToCheck)
    {
        $userRoles = $this->roles()->select('name')->get()->toArray();
        
        foreach ($roleNamesToCheck as $roleToCheck) {
            foreach ($userRoles as $userRole) {
                if ($roleToCheck == $userRole['name']) {
                    return true;
                }
            }
        }
        
        return false;
    }
}