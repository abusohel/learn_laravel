<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\country;
class country extends Model
{
    //
    public function posts(){
    	return $this->hasManyThrough(Post::class,Usr::class);
    }

}
