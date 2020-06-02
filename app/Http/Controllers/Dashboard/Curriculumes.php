<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Curriculume;
use App\Models\Course;
class Curriculumes extends DashboardController
{
    //
    public function __construct(Curriculume $model){

    	parent::__construct($model);
    }

    //protected function with(){
       // return ['course'];
    //}

    protected function append(){

    	$data = [

    		'courses' => Course::get()
    	];

    	return $data;
    }
}
