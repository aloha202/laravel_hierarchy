@foreach($comments as $comment)
    <div style="padding-left: {{ $hierarchy * 30 }}px">
        <strong>{{ $comment->username }},
            {{ $comment->created_at->diffForHumans() }}

        </strong>
        <p>
            {{ $comment->comment }}
        </p>
    </div>
    @if(count($comment->subcomments))
        @include('comment.list', ['comments' => $comment->subcomments, 'hierarchy' => $hierarchy + 1])
    @endif
@endforeach


