<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Day;

class userxday extends Model
{
    public function getUserId(){
        return User::find($this->attributes['user_id']);
    }

    public function setUserId($user_id){
        $this->attributes['user_id'] = $user_id;
    }

    public function getDayId(){
        return Day::find($this->attributes['day_id']);
    }


    public function setDayId($day_id){
        $this->attributes['day_id'] = $day_id;
    }
}
