<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{

    /*
      $rubric = Rubric::find(1);
      $rubric->post;
     */
    public function post()
    {
        return $this->hasOne('App\Post');
//        return  $this->hasOne(Post::class);
    }

}
