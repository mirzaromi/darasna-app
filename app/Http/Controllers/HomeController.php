<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        
        return view('public.index',[
            'data' => Post::get(),
            'title1' => 'dashboard'
        ]);
    }
}
