<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userxday;
use Illuminate\Support\Facades\Auth;
use App\Day;
use App\Subject;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $is_teacher= $user['is_teacher'];
        $user_id = Auth::id();
        if(!$user_id){
            return redirect()->route('home');
        }
        $dayxusers = $user->getStudentClases()->get();
        $data = [];
        $data['schedule_user'] = $dayxusers;
        $aux = [];
        foreach ($dayxusers as $dayx){
            $day = $dayx->getDayId();
            array_push($aux,$day);
        }
        $data['days'] = $aux;
        $data['is_teacher'] = $is_teacher;
        return view('administration.panel')->with('data', $data);
    }

    public function delete($id){
        $user = Auth::id();
        $userxday = userxday::where([['user_id',$user],['day_id',$id]])->first();
        $userxday->delete();
        return redirect()->route('admin_panel');
    }

    public function createPage(){
        $subjects = Subject::all();
        $data['subjects'] = $subjects;
        $data['msg'] = "";
        return view('administration.create')->with("data",$data);
    }

    public function createSchedule(Request $request){
        $subjects = Subject::all();
        $data['subjects'] = $subjects;
        $data['msg'] = "Horario Creado";
        $aux = $request-> only(['checkboxvar']);
        $time_aux = $request->only(['appt']);
        $time1 = $time_aux['appt'];
        $time_aux = $request->only(['appt2']);
        $time2 = $time_aux['appt2'];
        $time1 = strtotime($time1);
        $time2 = strtotime($time2);
        $nombres = $aux['checkboxvar'];
        $subject = $request-> only(['subjects']);
        $subject = $subject['subjects'];
        $user= Auth::id();
        foreach ($nombres as $nombre){
            $temp = $time1;
            $temp2 = $time1 + 60*60;
            while ($temp2 <= $time2){
                $reverse1 = date("H:i", $temp); 
                $reverse2 = date("H:i", $temp2);
                Day::create(
                    [
                        'day_name' => $nombre,
                        'inicio' => $reverse1,
                        'final' => $reverse2,
                        'subject_id' => $subject,
                        'user_id' => $user
                    ]
                );
                $temp = $temp+60*60;
                $temp2 = $temp2+60*60;
            }
        }
        return view('administration.create')->with("data",$data);;
    }

    public function nextClasses(){
        $user= Auth::id();
        $classes = Day::where('user_id',$user)->get();
        $data = [];
        $data["days"] = $classes;
        return view('administration.showClasses')->with("data", $data);
    }

    public function deleteSchedule($id){
        Day::destroy($id);
        return redirect()->route('show_classes');
    }
}
