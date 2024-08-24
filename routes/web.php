<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/posts', function () {

    $posts = Post::latest()->simplePaginate(3);

    return view('posts', ['posts' => $posts]);
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/create', function() {

    request()->validate([
        'address' => ['required', 'min:3'],
        'rating' => ['required', 'min:1', 'max:4'],
    ]);

    Post::create([
        'address' => request('address'),
        'rating' => request('rating'),
        'renter_id' => 11,
    ]);
    return redirect('/posts');
});

Route::get('/post/{id}', function ($id) {
    $post = Post::find($id);
    // $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('single-post', ['post' => $post]);
});

Route::get('/about', function() {
    return view('about');
});