<?php

namespace App\Http\Controllers;

use App\User;

class UserPostController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);
        $posts = $user->posts;
        return view('users.posts', ['user' => $user,'posts' => $posts]);
    }
}
