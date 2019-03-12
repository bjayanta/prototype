<?php

namespace App\Models\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'username', 'email', 'password', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
        return $this->belongsToMany('App\Models\Admin\Role');
    }

    public function getNameAttribute($value) {
        return ucfirst($value);
    }

    public function hasAccess(array $permissions) {
        // dd($permissions);
        // dd($this->roles);

        foreach($this->roles as $role) {
            if($role->hasAccess($permissions)) {
                return true;
            }
        }

        return false;
    }

}
