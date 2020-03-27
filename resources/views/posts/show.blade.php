@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h2">Single post</h1>
                <hr class="mb-4">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="media">
                    <svg class="rounded-circle mr-3" width="75" height="75" xmlns="http://www.w3.org/2000/svg"
                         preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                         aria-label="Completely round image: 75x75">
                        <title>{{ $post->title }}</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect>
                    </svg>
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">{{ $post->title }}</h5> by
                        <a href="{{ route('users.posts.index', ['user' => $post]) }}">
                            {{ $post->user->name }}
                        </a>
                        <small class="text-muted">by
                            on {{ date_format($post->created_at, 'd-M-Y') }}
                        </small>
                        <p class="mb-1">{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-5">
                <p><a href="{{ route('posts.index') }}" class="btn btn-secondary">All posts</a></p>
            </div>
        </div>
    </div>
@endsection
