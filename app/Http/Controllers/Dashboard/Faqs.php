<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq;
class Faqs extends DashboardController
{
    //
    public function __construct(Faq $model){
        parent::__construct($model);
    }
}
