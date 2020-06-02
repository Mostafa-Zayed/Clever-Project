<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Type;
use App\Http\Requests\Dashboard\Types\Store;
use App\Http\Requests\Dashboard\Types\Update;

class Types extends DashboardController
{
    //
    public function __construct(Type $model)
    {
    	parent::__construct($model);
    }

    public function store(Store $request)
    {
    	$this->model::create($request->all());
    	return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }

    public function update($id, Update $request)
    {
    	$row = $this->model::findOrFail($id);
    	$row->update($request->all());
    	return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.edit',['id'=>$id]);
    }
}
