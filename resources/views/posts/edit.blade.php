@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h2">All posts</h1>
                <hr class="mb-4">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form>
                    <input id="x" type="hidden" name="content">
                    <trix-editor input="x"></trix-editor>
                </form>
            </div>
        </div>
    </div>
@endsection
