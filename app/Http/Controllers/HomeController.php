<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        
        return view('public.index',[
            'title1' => 'Home',
            'posts' => Post::latest()->take(4)->get(),
            'posts_latest' => Post::latest()->take(4)->get()
        ]);
    }
}
