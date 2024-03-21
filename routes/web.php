<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return '<h1>Hello, World!</h1>';
});*/

/*Route::get('/', function () {
    $res = 2 + 3;
    $name = 'John';
    return view('home')->with('var', $res);
});*/

/*Route::get('/', function () {
    $res = 2 + 3;
    $name = 'John';
    return view('home', ['var' => $res, 'name' => $name]);
});*/

Route::get('/', function () {
    $res = 2 + 3;
    $name = 'John';
    return view('home', compact('res', 'name'));
});

Route::get('/about', function () {
    return '<h1>About Page</h1>';
});

/*Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-email', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return 'Send Email';
});*/

/*Route::match(['post', 'get'], '/contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('contact');
});*/

Route::match(['post', 'get'], '/contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('contact');
})->name('contact');

Route::view('/test', 'test', ['test' => 'Test Data']);

/* redirect page   status 302*/
Route::redirect('/about', '/contact');

/* redirect page   status 301*/
Route::redirect('/contact3', '/test', 301);

