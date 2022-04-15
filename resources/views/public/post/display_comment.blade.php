@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>Nama Orang</strong>
        <p>{{ $comment->isi }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comment.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="isi" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Reply" />
            </div>
            <hr />
        </form>
        @include('public.post.display_comment', ['comments' => $comment->reply])
    </div>
@endforeach