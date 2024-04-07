<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * class Rubric
 * @package App
 * @mixin Builder
 */
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
