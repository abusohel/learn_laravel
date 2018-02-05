<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    public function passport(){
    	return $this->hasOne(Passport::class);
    }
    public function mobile(){
    	return $this->hasMany(Mobile::class);
    }
    public function role(){
    	return $this->belongsToMany(Role::class);
    }
}
