<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Phpfastcache\Helper\Psr16Adapter;


class HomeController extends Controller
{
    public function index()
    {
        $akidah = Post::where('kategori', 'AKIDAH')->latest()->take(1)->get();
        $hukum = Post::where('kategori', 'HUKUM')->latest()->take(1)->get();
        $sejarah = Post::where('kategori', 'SEJARAH')->latest()->take(1)->get();
        $tokoh = Post::where('kategori', 'TOKOH')->latest()->take(1)->get();
        $kategori = Post::select('kategori')->distinct()->get();
        $carousel_post = array($akidah[0], $hukum[0], $sejarah[0], $tokoh[0]);
        // dd($carousel_post);

        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'mai.amanatulummah.pacet', 'Suksesptn01', new Psr16Adapter('Files'));
        $instagram->login();
        $instagram->saveSession();
        $account = $instagram->getAccount('darasna.network');
        $accountMedias = $account->getMedias();
        // dd($accountMedias);
        // dd($posts[2]->getImageHighResolutionUrl());
        // dd($accountMedias[0]->getImageHighResolutionUrl());
        // dd($accountMedias);
        foreach ($accountMedias as $key => $accountMedia) 
        {
            // dump($key);
            $images[$key] = str_replace("&amp;","&",$accountMedia->getImageHighResolutionUrl());
            // dump($images[$key]);
            $path = $accountMedia->getImageHighResolutionUrl();
            $imageName = $key.'.png';
            $img = public_path('insta/images'. $imageName);
            // dump($img);
            file_put_contents($img, file_get_contents($path));
        }
        // die();
        return view('public.index', [
            'title1' => 'Home',
            'carousel_posts' => $carousel_post,
            'posts_latest' => Post::latest()->take(6)->get(),
            'popular_post' => Post::orderBy('like', 'desc')->take(1)->get(),
            'other_pop_post' => Post::orderBy('like', 'desc')->skip(1)->take(4)->get(),
            'kategori' => $kategori,
            'instagram' => $images,
        ]);
    }
}
