<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Instructor;
class Instructors extends DashboardController
{
    //
    public function __construct(Instructor $model){
        parent::__construct($model);
    }
}
