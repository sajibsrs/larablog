@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($users as $user)
            <div class="col">
                <div class="media">
                    <svg class="rounded-circle mr-3" width="75" height="75" xmlns="http://www.w3.org/2000/svg"
                         preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                         aria-label="Completely round image: 75x75">
                        <title>{{ $user->name }}</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect>
                    </svg>
                    <div class="media-body">
                        <h5 class="mt-0">{{ $user->name }}</h5>
                        {{ $user->email }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
