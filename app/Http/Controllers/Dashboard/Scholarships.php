<?php

namespace App\Http\Controllers\Dashboard;

//use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Scholarships\Store;
use App\Http\Requests\Dashboard\Categories\Update;

use App\Models\Scholarship;
class Scholarships extends DashboardController
{
    //
    public function __construct(Scholarship $model){

    	parent::__construct($model);
    }

    public function store(Store $request)
    {

    	$data = $request->all();

    	if($request->has('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$new_name);

            $data['image']= $new_name;
        }
        $row = $this->model::create($data);
        
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }

    public function update($id,Update $request){

        $data = $request->all();
        
        $row = $this->model::findOrFail($id);
        if($request->has('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$new_name);
            $data['image']= $new_name;
           
        }
        $row->update($data);

        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.edit',['id'=>$row->id]);
    }
}
