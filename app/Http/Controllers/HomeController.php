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
        $title = 'Home Page';
        $h1 = '<h1>home page</h1>';
        $data1 = range(1, 20);
        $data2 = [
            'title' => 'Title',
            'content' => 'Content',
            'keys' => 'Keywords',
        ];
        return view('home', compact('title', 'h1', 'data1', 'data2'));
    }

    public function test()
    {
        return __METHOD__;
    }



}
