<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $fillable=[
        'title',
        'content',
        'is_feature'
    ];

}
/*
$post	=	new	\App\Post();
$post->title	=	'test	title';
$post->content	=	'test	content';
$post->save();
*/