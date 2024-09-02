<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::latest()->simplePaginate(3);
        return view('posts', ['posts' => $posts]);
    }
    public function show(Post $post) {
        return view('single-post', ['post' => $post]);
    }
    public function create() {
        return view('create');
    }
    public function store() {
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
    }
    public function edit(Post $post) {
        return view('edit', ['post' => $post]);
    }
    public function update(Post $post) {
        request()->validate([
            'address' => ['required', 'min:3'],
            'rating' => ['required', 'min:1', 'max:4'],
        ]);
    
        $post->update([
            'address' => request('address'),
            'rating' => request('rating'),
        ]);
        return redirect('posts/'.$post->id);
    }
    public function destroy(Post $post) {
        $post->delete();
        return redirect('/posts');
    }
}
