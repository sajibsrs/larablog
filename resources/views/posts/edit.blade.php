@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h2">Edit post</h1>
                <hr class="mb-4">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="POST" action="/posts">
                    @csrf
                    <div class="form-group">
                        <label for="title">Post title</label>
                        <input type="text" class="form-control" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Post content</label>
                        <input id="content" type="hidden" name="content" value="{{ $post->content }}">
                        <trix-editor input="content"></trix-editor>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
