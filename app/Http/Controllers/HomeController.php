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

        /* получение рубрики для поста
        $post = Post::find(3);
//        dump($post);
//        dump($post->title);
//        dump($post->title, $post->rubric);
        dump($post->title, $post->rubric->title);*/

        /* получение поста для рубрики */
//        $rubric = Rubric::find(3);
//        dump($rubric->title, $rubric->post->title);

        /* One To Many для rubric*/
//        $rubric = Rubric::find(1);
//        dump($rubric->posts);

        /* One To Many для posts*/
//        $post = Post::find(1);
//        dump($post->title, $post->rubric->title);

//        $posts = Rubric::find(1)->posts()->select('title')->where('id', '>', '2')->get();
//        dump($posts);

        /* ленивая загрузка - lazy loading - выполняется каждый sql-запрос в цикле */
//        $posts = Post::where('id', '>', 1)->get();
//        foreach ($posts as $post) {
//            dump($post->title, $post->rubric->title);
//        }

        /* жадная загрузка - greedy loading */
//        $posts = Post::with('rubric')->where('id', '>', 1)->get();
//        foreach ($posts as $post) {
//            dump($post->title, $post->rubric->title);
//        }

        /* Many to many : posts<->tags */
//        $post = Post::find(2);
//        dump($post->title);
//        foreach ($post->tags as $tag) {
//            dump($tag->title);
//        }

        /* Many to many : tags<->posts */
        $tag = Tag::find(3);
        dump($tag->title);
        foreach ($tag->posts as $post) {
            dump($post->title);
        }



        return view('home', ['res' => 5, 'name' => 'John']);
    }

    public function test()
    {
        return __METHOD__;
    }



}
