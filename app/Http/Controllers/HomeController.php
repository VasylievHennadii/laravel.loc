<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
//        DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ['Статья 5', 'Lorem ipsum 5...']);
//        DB::insert("INSERT INTO posts (title, content) VALUES (:title, :content)", ['content' => 'Lorem ipsum 5...', 'title' => 'Статья 5']);

//        DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at IS NULL", [NOW(), NOW()]);

        DB::delete("DELETE FROM posts WHERE id = :id", ['id' => 4]);

        $posts = DB::select("SELECT * FROM posts WHERE id > :id", ['id' => 2]);
        return $posts;

        /*dump($_ENV['MY_SETTING']);
        dump(env('MY_SETTING'));
        dump(config('app.timezone'));
        dump(config('database.connections.mysql.database'));
        dump($_ENV);*/
        return view('home', ['res' => 5, 'name' => 'John']);
    }

    public function test()
    {
        return __METHOD__;
    }



}
