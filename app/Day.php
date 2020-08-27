<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;
use App\User;

class Day extends Model
{
    protected $fillable = [
        'day_name','inicio','final','subject_id','user_id'
    ];

    public function getId() {
        return $this->attributes['id'];
    }

    public function getDay_name(){
        return $this->attributes['day_name'];
    }

    public function setName($day_name) {
        $this->attributes['day_name'] = $day_name;
    }

    public function getInicio(){
        return $this->attributes['inicio'];
    }

    public function setInicio($inicio){
        $this->attributes['inicio'] = $inicio;
    }

    public function getFinal(){
        return $this->attributes['final'];
    }

    public function setFinal($final){
        $this->attributes['final'] = $final;
    }

    public function getSubject(){
        return Subject::find($this->attributes['subject_id']);
    }

    public function getUser(){
        return User::find($this->attributes['user_id']) ;
    }

}

