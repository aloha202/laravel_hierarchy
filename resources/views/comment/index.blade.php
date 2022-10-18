@extends('layouts.app')

@section('template_title')
    Comments
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Comments
                    </div>
                    <div class="card-body" id="comment-body">
                        @include('comment.list', ['comments' => $comments, 'hierarchy' => 0])
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
