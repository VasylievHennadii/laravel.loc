<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
       /*$this->validate($request, [
           'title' => 'required|min:5|max:100',
           'content' => 'required',
           'rubric_id' => 'integer',
       ]);*/

        $rules = [
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'integer',
        ];
        $messages = [
            'title.required' => 'Заполните поле название',
            'title.min' => 'Минимум 5 символов в названии',
            'title.max' => 'Максимум 100 символов в названии',
            'content.required' => 'Заполните текст статьи',
            'rubric_id.integer' => 'Выберите рубрику',
        ];

        $validator = Validator::make($request->all(), $rules, $messages)->validate();


        Post::create($request->all());
        return redirect()->route('home');
    }


}
