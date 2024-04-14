<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        $title = 'Home Page';
        return view('home', compact('title', 'posts'));
    }

    public function test()
    {
        return __METHOD__;
    }



}
