<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    protected $fillable = ['name','category_id','type_id','describe','lectures','quizzes','price','image','pass_percentage','show','max_retakes','meta_keywords','status','meta_describe','duration','show'];
    //protected $guarded = [];
    public function curriculume(){

    	return $this->hasOne(Curriculume::class,'course_id');
    }

    public function certification(){

    	return $this->hasOne(Certification::class,'course_id');
    }
    public function instructors(){
        return $this->belongsToMany(Instructor::class,'courses_instructors');
   	}

	public function users(){

		return $this->belongsToMany(User::class,'users_courses');
	}

	public function faqs(){

		return $this->belongsToMany(Faq::class,'courses_faqs');
	}

    public function category(){

        return $this->belongsTo(Category::class,'category_id');
    }

    public function type(){

        return $this->belongsTo(Type::class,'type_id');
    }

}
