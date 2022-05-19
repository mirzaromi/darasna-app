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

        // $comment_sum = 0;

        $id_posts = Post::where('author_id',auth()->user()->author_id)->select('id')->get();
        $comment_sum = Comment::whereIn('post_id', $id_posts)->count();

        // dd($comment_sum);
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