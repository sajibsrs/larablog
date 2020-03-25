@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h2">User Profile</h1>
                <hr class="mb-4">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="media">
                    <svg class="rounded-circle mr-3" width="75" height="75" xmlns="http://www.w3.org/2000/svg"
                         preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                         aria-label="Completely round image: 75x75">
                        <title>{{ $user->name }}</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect>
                    </svg>
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">{{ $user->name }}</h5>
                        <p class="mb-1">{{ $user->email }}</p>
                        <p class="mb-1">{{ $user->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
