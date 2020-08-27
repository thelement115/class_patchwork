<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Day;

class ScheduleController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        $subjects = Subject::all();
        $data['subjects'] = $subjects;
        return view('Schedule.searchBar')->with("data",$data);
    }

    public function schedule(Request $request){
        $data = [];
        $subject = $request ->only(['subjects']);
        $subject = $subject['subjects'];
        $subjects = Subject::all();
        $data['subjects'] = $subjects;
        if(!is_numeric($subject)){
            $subject = Subject::where('name',$subject)->get()[0]->getId();
        }
        $days = Day::where('subject_id',$subject)->get();
        $data['days'] = $days;
        return view('Schedule.scheduleTable')->with("data",$data);
    }
}
