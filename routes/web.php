<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
 
    return view('homepage', ['posts' => Post::all()]);
});

