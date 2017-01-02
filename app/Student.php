<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function courses(){
		return $this->belongsToMany('App\Course');
	}

	public function address(){
		return $this->hasOne('App\Address');	
	}
}
