<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['nama'=> 'Gina Meirina', ['title' => 'posts']]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog','posts' => Post::all()]);
});

Route::get('/posts/{slug}', function(Post $post){
    return view('post', ['title' => 'Single post', 'post']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});