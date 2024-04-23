<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        /* создание куки */
//        Cookie::queue('test', 'Test cookie', 5);

        /* удаление куки */
//        Cookie::queue(Cookie::forget('test'));

        /* получение и вывод куки */
//        dump(Cookie::get('test'));
//        dump($request->cookie('test'));

        /* запись в кэш */
//        Cache::put('key', 'Value', 300);

        /* удаление из кэша */
//        dump(Cache::pull('key'));

//        Cache::forget('key');

        /* полная очистка кэша */
//        Cache::flush();

        /* получение из кэша */
//        dump(Cache::get('key'));

        if(Cache::has('posts')) {
            $posts = Cache::get('posts');
        } else {
            $posts = Post::orderBy('id', 'desc')->get();
            Cache::put('posts', $posts);
        }

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
       $this->validate($request, [
           'title' => 'required|min:5|max:100',
           'content' => 'required',
           'rubric_id' => 'integer',
       ]);

        Post::create($request->all());
        $request->session()->flash('success', 'Данные сохранены!');
        return redirect()->route('home');
    }


}
