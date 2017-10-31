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
use App\Post;
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


$posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
dd($posts);

$post=\App\Post::find(1);
$post‐>update([
    'title'=>'updatedtitle',
    'content'=>'updatedcontent',
]);
*/

\App\Post::destroy(3,5,7);
/*
$allPosts=\App\Post::all();
dd($allPosts);
$featuredPosts=\App\Post::where('is_feature',1)->get();
dd($featuredPosts);
*/
$fourthPost=\App\Post::find(6);
dd($fourthPost);
$lastPost=\App\Post::orderBy('id','DESC')‐>first();
dd($lastPost);
