<?php

namespace App\Http\Controllers;

use App\User;

class UserPostController extends Controller
{
    public function index($id)
    {
        $posts = User::findOrFail($id)->posts;
        return view('users.posts', ['posts' => $posts]);
    }
}
