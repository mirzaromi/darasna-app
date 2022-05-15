@foreach($comments as $comment)
    <div class="display-comment @if($comment->parent_id != null) comment-reply @endif" >
        <strong>{{ $comment->user }}</strong>
        @if ($comment->parent_id != null)
            <span>membalas </span>
        @endif
        <strong>{{ $comment->reply_user }}</strong>
        <p class="@if($comment->parent_id != null) font-small @endif">{{ $comment->isi }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comment.store') }}" style="margin-bottom: 0px">
            @csrf
            <div class="form-group">
                <input type="text" name="user" class="form-control @if($comment->parent_id != null) form-nama @endif" placeholder="Nama" style="width: 30%; margin-bottom: 10px" />
                
                <input type="text" name="isi" class="form-control @if($comment->parent_id != null) form-nama @endif" placeholder="Isi"/>
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                <input type="hidden" name="reply_user" value="{{ $comment->user }}" />
            </div>
            <div class="form-group" style="margin-bottom: 20px">
                <input type="submit" class="btn btn-success @if($comment->parent_id != null) btn-reply @endif" value="Reply" />
            </div>
            
        </form>
    </div>
    @include('public.post.display_comment', ['comments' => $comment->reply])
    @endforeach