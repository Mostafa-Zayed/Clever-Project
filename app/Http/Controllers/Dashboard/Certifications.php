<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Requests\Dashboard\Certifications\Store;
use App\Models\Certification;
use App\Models\Course;
class Certifications extends DashboardController
{
    //
    public function __construct(Certification $model){
        parent::__construct($model);
    }

    protected function append(){

    	$data = [
    		'courses' => Course::get()
    	];

    	return $data;
    }

    public function store(Store $request){
       //dd($request->all());
        $data = $request->all();
        if($request->has('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$new_name);
            $data['image']= $new_name;
        }
        $this->model::create($data);
        //dd($request->all());
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');    
    }
}
