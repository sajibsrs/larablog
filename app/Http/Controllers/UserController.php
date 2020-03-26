<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    public function show($id)
    {
        return view('users.show', ['user' => User::findOrFail($id)]);
    }
}
