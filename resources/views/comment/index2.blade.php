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
                        @include('comment.list2', ['tree' => $tree])
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        function paginateNext(link)
        {

            $(link).hide();
            $.get(link.href, function (resp){

                $('#comment-body').append(resp);

            });

        }

    </script>

@endsection
