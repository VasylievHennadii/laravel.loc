<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{

    /* One To One */
//    public function post()
//    {
//        return $this->hasOne('App\Post');
//    }

    /* One To Many */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }



}
