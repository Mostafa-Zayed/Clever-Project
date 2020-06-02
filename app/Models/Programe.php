<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programe extends Model
{
    //
    protected $fillable = ['category_id','type_id','name','describe','image','meta_keywords','meta_describe','show'];

    public function category(){

    	return $this->belongsTo(Category::class,'category_id');
    }

    public function type()
    {
    	return $this->belongsTo(ProgramType::class,'type_id');
    }
    public function instructors(){

    	return $this->belongsToMany(Instructor::class,'programes_instructors');
    }
}
