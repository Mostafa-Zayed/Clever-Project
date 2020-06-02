<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //

    public function courses(){

		return $this->belongsToMany(Course::class,'courses_faqs');
	}

	public function events(){

		return $this->belongsToMany(Event::class,'events_faqs');
	}
}
