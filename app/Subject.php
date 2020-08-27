<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name'
    ];

    public function getId() {
        return $this->attributes['id'];
    }

    public function getName(){
        return $this->attributes['name'];
    }

    public function setName($name) {
        $this->attributes['name'] = $name;
    }

}
