@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-6 offset-3 pt-3 pb-4">
                    <div>
                        <h3 class="font-weight-bold">{{ $post->user->username }}</h3>
                    </div>
                    <div>{{ $post->caption }}</div>
                </div>
            </div>
           @endforeach
    </div>
@endsection
