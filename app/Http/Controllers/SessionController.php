<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //
    public function create() {
        return view('auth.login');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'No way pal!']);
        }
        request()->session()->regenerate();
        return redirect('/posts');

    }

    public function destroy() {
        Auth::logout();
        return redirect('/');
    }
}
