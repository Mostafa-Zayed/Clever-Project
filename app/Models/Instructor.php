<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = ['qualifications'];
    public function courses(){
        return $this->belongsToMany(Course::class,'courses_instructors');
    }

    public function user(){

    	return $this->belongsTo(User::class);
    }

    public function events(){

		return $this->belongsToMany(Instructor::class,'events_instructors');
	}

	public function programes(){

		return $this->belongsToMany(Programe::class,'programes_instructors');
	}
}
