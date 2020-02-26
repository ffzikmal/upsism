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
                        <div>
                            <button onclick="handleDelete({{ $post->id }})" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>

                <hr>

                <div>{{ $post->caption }}</div>
            </div>
        </div>
    </div>

    <div class="modal" id="modalDelete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form id="formDelete" action="" method="post">
                @csrf
                @method('delete')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Warning !</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-danger" value="Delete">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
