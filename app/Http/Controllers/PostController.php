<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.new');
    }

    public function store(Request $request)
    {

    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update($id)
    {
        $post = Post::find($id);
        $post->title = request('title');
        $post->content = request('content');
        $post->save();

        return redirect('/posts/'. $post->id);
    }

    public function destroy(Post $post)
    {

    }
}
