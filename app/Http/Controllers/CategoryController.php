<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($kategori)
    {
        return view('public.category.index',[
            'title1' => 'kategori',
            'posts' => Post::where('kategori',$kategori)->paginate(10)
        ]);
    }
}
