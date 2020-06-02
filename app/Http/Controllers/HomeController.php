<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramType;
use App\Models\Course;
use App\Models\Programe;
use App\Models\Instructor;
use App\Models\Scholarships;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //view::share('courses',Course::where('show',1)->get());
        //view::share('scholarships',Scholarships::where('show',1)->get());
        //view::share('programtypes',ProgramType::all());
        //view::share('instructors',Instructor::where('show',1)->get());

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::where('show',1)->get();
        $programType = ProgramType::all();
         $programes = Programe::all();
         $instructors = Instructor::all();
        return view('welcome',['programtypes'=>$programType,'courses'=>$courses,'programes'=>$programes,'instructors'=>$instructors]);
    }

    public function courses()
    {
        $courses = Course::all();
        return view('front-end.courses.index',['courses'=>$courses]);
    }
    public function course($id)
    {
        $course = Course::findOrFail($id);
        return view('front-end.courses.single-course',['course'=>$course]);
    }
    public function instructors()
    {
            return view('instructors');

    }
    public function programs()
    {
        $programes = Programe::all();
        return view('front-end.programs.index',['programes'=>$programes]);
    }

    public function scholarships()
    {
        return view('front-end.scholarships.index');
    }

    public function recent_events()
    {
        return view('front-end.events.recent-events');
    }

    public function event_details()
    {
        return view('front-end.events.event-details');
    }

    public function upcoming_events()
    {
        return view('front-end.events.upcoming-events');
    }

}
