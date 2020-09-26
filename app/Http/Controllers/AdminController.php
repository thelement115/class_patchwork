<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userxday;
use Illuminate\Support\Facades\Auth;
use App\Day;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user_id = Auth::id();
        if($user_id == null){
            return redirect()->route('home');
        }
        $dayxusers = $user->getStudentClases()->get();; 
        $data = [];
        $data['schedule_user'] = $dayxusers;
        $aux = [];
        foreach ($dayxusers as $dayx){
            $day = $dayx->getDayId();
            array_push($aux,$day);
        }
        $data['days'] = $aux;
        return view('administration.panel')->with('data', $data);
    }
}
