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

Route::group(['prefix'=>'admin'],function(){
    Route::get('/',['as'=>'admin.dashboard.index','uses'=>
        'AdminDashboardController@index']);
    Route::get('posts' ,['as'=>'admin.posts.index','uses'
    =>'AdminPostsController@index']);
    Route::get('posts/create' ,['as'=>'admin.posts.create','uses'
    =>'AdminPostsController@create']);
    Route::get('posts/{id}/edit',['as'=>'admin.posts.edit' ,'uses'
    =>'AdminPostsController@show']);
    Route::post('posts',['as'=>'admin.posts.store','uses'=>
        'AdminPostsController@store']);
    Route::patch('posts/{id}',['as'=>'admin.posts.update','uses'=>
'AdminPostsController@update']);

});

Route::get('test', function () {
    /*
    \App\Post::create([
        'title' => 'testtitle',
        'content' => 'testcontent',
    ]);*/
    $post=new\App\Post();
    $post->title='testtitle';
    $post->content='testcontent';
    $post->save();

/*
//練習 3：查詢資料
$posts=\App\Post::all();
dd($posts);
*/

/*
$post=\App\Post::find(3);
dd($post);
*/
/*
$posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
dd($posts);
*/
/*
$post=\App\Post::find(1);
$post->update([
    'title'=>'updatedtitle',
    'content'=>'updatedcontent',
]);
*/
/*
    $post=\App\Post::find(1);
    $post->title='savedtitle';
    $post->content='savedcontent';
    $post->save();
*/
/*
    $post=\App\Post::find(1);
    $post->delete();
*/
/*
\App\Post::destroy(3,5,7);
*/
/*
$allPosts=\App\Post::all();
dd($allPosts);
*/
/*
$featuredPosts=\App\Post::where('is_feature',1)->get();
dd($featuredPosts);
*/
/*
$fourthPost=\App\Post::find(6);
dd($fourthPost);
*/
/*
$lastPost=\App\Post::orderBy('id','DESC')->first();
dd($lastPost);
*/
    $post=\App\Post::find(2);
    foreach($post->comments as $comment){
        echo$comment->content.'<br>';
    }
});