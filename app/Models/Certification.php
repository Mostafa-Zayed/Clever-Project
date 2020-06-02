<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    //
    protected $fillable = ['course_id','image'];

    public function course(){

    	return $this->belongsTo(Course::class,'course_id');
    }

    /*public function program()
    {
    	return $this->belongsTo(Programe::class,'course_id');
    }*/
}
