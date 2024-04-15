<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $title = 'Home Page';
        return view('home', compact('title', 'posts'));
    }

    public function create()
    {
        $title = 'Create Post';
        $rubrics = Rubric::pluck('title', 'id')->all();
        return view('create', compact('title', 'rubrics'));
    }

    public function store(Request $request)
    {
        /*dump($request->input('title'));
        dump($request->input('content'));
        dd($request->input('rubric_id'));*/

//        dd($request->all());
        Post::create($request->all());
        return redirect()->route('home');
    }


}
