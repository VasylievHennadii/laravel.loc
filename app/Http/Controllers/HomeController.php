<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {

//        $data = Country::all();
//        $data = Country::query()->limit(5)->get();

        /* используем php doc mixin Builder*/
//        $data = Country::limit(5)->get();
//        $data = Country::where('Code', '<', 'ALB')->select('Code', 'Name')->offset(1)->limit(2)->get();

//        $data = City::find(5);
//        $data = Country::find('AGO');
//        dd($data);

        /* создание записи в таблицу */
        /*$post = new Post();
        $post->title = 'Post 4';
        $post->content = 'Lorem ipsum 4';
        $post->save();*/

        /* создание записи в таблицу с помощью свойства fillable*/
//        Post::create(['title' => 'Post 7', 'content' => 'Lorem ipsum 7']);

        /*$post = new Post();
        $post->fill(['title' => 'Post 8', 'content' => 'Lorem ipsum 8']);
        $post->save();*/

        /* обновление поля (update) */
//        $post = Post::find(6);
//        $post->content = 'Lorem ipsum 66';
//        $post->save();

        /* массовое обновление полей по условию */
//        Post::where('id', '>', 3)
//            ->update(['updated_at' => NOW()]);

        /* удаление delete */
//        $post = Post::find(7);
//        $post->delete();

        /* удаление destroy без создания объекта*/
//        Post::destroy(6);
        Post::destroy(4, 5);



        return view('home', ['res' => 5, 'name' => 'John']);
    }

    public function test()
    {
        return __METHOD__;
    }



}
