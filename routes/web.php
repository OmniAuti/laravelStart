<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;

// Route::get('/', function () {
//     return view('homepage');
// });
// Route::get('/about', function() {
//     return view('about');
// });

// Route::controller(PostsController::class)->group(function() {
//     Route::get('/posts', 'index');
//     Route::get('/posts/{post}', 'show');
//     // Edit
//     Route::get('/posts/{post}/edit', 'edit');
//     Route::patch('/posts/{post}', 'update');
//     // Delete
//     Route::delete('/posts/{post}', 'destroy');
//     // Create
//     Route::get('posts/create', 'create');
//     Route::post('posts/create', 'store');
// });

Route::resource('posts', PostsController::class);


Route::view('/login', 'auth.login');

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::view('/', 'homepage');
Route::view('/about', 'about');
// Posts
// Route::get('/posts', [PostsController::class, 'index']);
// Route::get('/posts/{post}', [PostsController::class, 'show']);
// // Edit
// Route::get('/post/{post}/edit', [PostsController::class, 'edit']);
// Route::patch('/post/{post}', [PostsController::class, 'update']);
// // Delete
// Route::delete('/post/{post}', [PostsController::class, 'destroy']);
// // Create
// Route::get('/create', [PostsController::class, 'create']);
// Route::post('/create', [PostsController::class, 'store']);



// Route::get('/posts', function () {
//     $posts = Post::latest()->simplePaginate(3);
//     return view('posts', ['posts' => $posts]);
// });

// Route::get('/post/{id}', function ($id) {
//     $post = Post::find($id);
//     // $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
//     return view('single-post', ['post' => $post]);
// });

// Route::get('/create', function () {
//     return view('create');
// });

// Route::post('/create', function() {

//     request()->validate([
//         'address' => ['required', 'min:3'],
//         'rating' => ['required', 'min:1', 'max:4'],
//     ]);

//     Post::create([
//         'address' => request('address'),
//         'rating' => request('rating'),
//         'renter_id' => 11,
//     ]);
//     return redirect('/posts');
// });

// Route::get('/post/{id}/edit', function ($id) {
//     $post = Post::find($id);

//     return view('edit', ['post' => $post]);
// });

// Route::patch('/post/{id}', function($id) {
//     $post = Post::findOrFail($id);
    
//     request()->validate([
//         'address' => ['required', 'min:3'],
//         'rating' => ['required', 'min:1', 'max:4'],
//     ]);

//     $post->update([
//         'address' => request('address'),
//         'rating' => request('rating'),
//     ]);
//     return redirect('post/'.$post->id);
// });

// Route::delete('/post/{id}', function($id) {
//     $post = Post::findOrFail($id)->delete();
//     return redirect('/posts');
// });

