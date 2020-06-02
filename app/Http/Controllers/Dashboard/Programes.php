<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Programe;
use App\Models\Category;
use App\Models\ProgramType;
use App\Models\Instructor;
use App\Http\Requests\Dashboard\Programes\Store;
use App\Http\Requests\Dashboard\Programes\Update;
class Programes extends DashboardController
{
    //
    public function __construct(Programe $model){

    	parent::__construct($model);
    }

    protected function append(){

    	$data = [

    		'categories' => Category::get(),
            'types'      => ProgramType::get(),
            'instructors' => Instructor::get()
    	];

    	return $data;
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
        if(isset($data['instructors']) && !empty($data['instructors'])){
            $row->instructors()->sync($data['instructors']);
        }

        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }

    public function update($id,Update $request)
    {
        $data = $request->all();
        if($request->has('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$new_name);
            $data['image']= $new_name;
        }
        $row = $this->model->update($data);
        if(isset($data['instructors']) && !empty($data['instructors'])){
            $row->instructors()->sync($data['instructors']);
        }

        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.edit',['id'=>$id]);
    }
}
