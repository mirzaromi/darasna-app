<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Author;

class DashboardController extends Controller
{
    public function index() {
        $post = Post::where('author_id', auth()->user()->author_id)->count();
        $like = Post::where('author_id', auth()->user()->author_id)->sum('like');
        $view = Post::where('author_id', auth()->user()->author_id)->sum('view');

        $comments = Author::where('id',auth()->user()->author_id)->get();

        $comment_sum = 0;

        foreach ($comments as $comment) {
            foreach ($comment->post as $c) {
                $comment_sum = $c->comment->count();
            }
            $comment->post->comment->count();

        }

        return view('admin.index',[
            'title1' => 'dashboard',
            'title2' => '',
            'post' => $post,
            'like' => $like,
            'view' => $view,
            'comment' => $comment_sum,
        ]);
    }
}