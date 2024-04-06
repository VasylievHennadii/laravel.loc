<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {

        /* получение рубрики для поста
        $post = Post::find(3);
//        dump($post);
//        dump($post->title);
//        dump($post->title, $post->rubric);
        dump($post->title, $post->rubric->title);*/

        /* получение поста для рубрики */
        $rubric = Rubric::find(3);
        dump($rubric->title, $rubric->post->title);


        return view('home', ['res' => 5, 'name' => 'John']);
    }

    public function test()
    {
        return __METHOD__;
    }



}
