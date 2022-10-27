@foreach($tree as $comment)
    <div style="padding-left: {{ $comment->hierarchy * 30 }}px">
        <strong>{{ $comment->username }},
            {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}

        </strong>
        <p>
            {{ $comment->comment }}
        </p>
    </div>
@endforeach

@if($tree->currentPage() != $tree->lastPage())

    <div class="paginator">
        <a href="/comments2?page={{ $tree->currentPage() + 1 }}" onclick="paginateNext(this); return false" >More comments</a>
    </div>

@endif
