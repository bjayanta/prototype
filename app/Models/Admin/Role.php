<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public $timestamps = false;

    public function permissions() {
    	return $this->belongsToMany('App\Models\Admin\Permission');
    }

    public function hasAccess(array $permissions) {
        // dd($permissions);

        foreach($permissions as $permission) {
            return $this->hasPermission($permission);
        }
    }

    public function hasPermission(string $permission) {
        $status = false;

        // dd($this->permissions->toArray());
        // dd($permission);

        foreach($this->permissions as $data) {
            if($data->slug == $permission) {
                $status = true;
            }
        }

        return $status;
    }
}
