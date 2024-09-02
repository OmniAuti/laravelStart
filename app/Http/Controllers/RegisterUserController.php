<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store() {
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:1', 'max:50'],
            'email' => ['required', 'email', 'min:5', 'max:50'],
            'password' => ['required'],
        ]);

        $user = User::create($validatedAttributes);
        Auth::login($user);
        return redirect('/posts');
    }
}
