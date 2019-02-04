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
}
