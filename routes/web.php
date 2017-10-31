<?php

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

Route::get('/', function () {
    return view('welcome');
});
/*
\App\Post::create([
    'title'=>'testtitle',
    'content'=>'testcontent',
]);

//練習 3：查詢資料
$posts=\App\Post::all();
dd($posts);

$post=\App\Post::find(3);
dd($post);
*/

$posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
dd($posts);
