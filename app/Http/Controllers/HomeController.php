<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $akidah = Post::where('kategori','AKIDAH')->latest()->take(1)->get();
        $hukum = Post::where('kategori','HUKUM')->latest()->take(1)->get();
        $sejarah = Post::where('kategori','SEJARAH')->latest()->take(1)->get();
        $tokoh = Post::where('kategori','TOKOH')->latest()->take(1)->get();
        
        $carousel_post = array($akidah[0],$hukum[0],$sejarah[0],$tokoh[0]);
        // dd($carousel_post);
        
        return view('public.index',[
            'title1' => 'Home',
            'carousel_posts' => $carousel_post,
            'posts_latest' => Post::latest()->take(6)->get(),
        ]);
    }
}
