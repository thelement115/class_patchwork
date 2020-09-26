<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Day;
use Illuminate\Support\Facades\Auth;
use App\userxday;

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
        $user= Auth::id();
        if(!$user){
            return redirect()->route('home');
        }
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
        $user= Auth::id();
        if(!is_numeric($subject)){
            $subject = Subject::where('name',$subject)->get()[0]->getId();
        }
        $days = Day::where('subject_id',$subject)->get();
        $aux = [];
        $data['days'] = $days;
        foreach ($days as $day){
            $already = userxday::where([['user_id',$user],['day_id',$day->getId()]])->first();
            if($already){
                continue;
            }else{
                array_push($aux,$day);
            }
        }
        $data['days'] = $aux;
        return view('Schedule.scheduleTable')->with("data",$data);
    }

    public function select(Request $request){
        $data = [];
        try{
            $day = $request -> only(['schedule']);
            $day = $day['schedule'];
            $user= Auth::id();
            $subjects = Subject::all();
            $data['subjects'] = $subjects;
            $data['subjects'] = $subjects;
            $exists = userxday::where([['user_id',$user],['day_id',$day]])->first();
            if ($exists) {
                echo $exists;
                $data['msg'] = "Horario ya seleccionado";
            }else{
                $selected = new userxday;
                $selected -> setUserId($user);
                $selected -> setDayId($day);
                $selected -> save();
                $data['msg'] = "Horario seleccionado satisfactoriamente";
            }
        }catch(Exception $e){
            $data['msg'] = "No se a podido seleccionar el horario, por favor intente de nuevo";
        }
        return view('Schedule.success')->with("data",$data);
    }

}
