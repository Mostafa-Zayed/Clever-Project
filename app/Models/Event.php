<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    public function faqs(){

		return $this->belongsToMany(Faq::class,'events_faqs');
	}

	public function instructors(){

		return $this->belongsToMany(Event::class,'events_instructors');
	}
}
