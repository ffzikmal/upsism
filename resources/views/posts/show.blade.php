@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-content-center justify-content-between">
                        <div>
                            <h5 class="font-weight-bold">{{ $post->user->username }}</h5>
                        </div>
                    </div>
                </div>

                <hr>

                <div>{{ $post->caption }}</div>
            </div>
        </div>
    </div>

@endsection
