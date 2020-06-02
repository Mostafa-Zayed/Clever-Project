<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
class Events extends DashboardController
{
    //
    public function __construct(Event $model){
        parent::__construct($model);
    }
}
