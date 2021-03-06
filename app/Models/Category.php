<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //protected $fillable = ['name','icon','meta_keywords','meta_describe','status'];
    protected $guarded = [];
    public function programes(){

    	return $this->hasToMany(Programe::class);
    }

    public function courses(){

    	return $this->hasToMany(Course::class);
    }
}
