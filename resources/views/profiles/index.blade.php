@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle" width="150">
        </div>
        <div class="col-9 pt-4">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile)
                    <a href="/p/create">Add Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex pb-3">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div class="pr-5"><strong>1</strong> Follower</div>
                <div class="pr-5"><strong>1</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a> </div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
