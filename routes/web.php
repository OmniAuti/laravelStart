<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/posts', function () {

    $posts = Post::simplePaginate(2);

    return view('posts', ['posts' => $posts]);
});

Route::get('/post/{id}', function ($id) {
    $post = Post::find($id);
    // $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('single-post', ['post' => $post]);
});

Route::get('/about', function() {
    return view('about');
});