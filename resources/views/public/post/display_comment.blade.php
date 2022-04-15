@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user }}</strong>
        <span>membalas </span>
        <strong>{{ $comment->reply_user }}</strong>
        <p>{{ $comment->isi }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comment.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="user" class="form-control" placeholder="Nama" style="width: 30%" />
                <br>
                <input type="text" name="isi" class="form-control" placeholder="Isi"/>
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                <input type="hidden" name="reply_user" value="{{ $comment->user }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Reply" />
            </div>
            <hr />
        </form>
    </div>
    @include('public.post.display_comment', ['comments' => $comment->reply])
    @endforeach