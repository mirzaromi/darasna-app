<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index',[
            'title1' => 'post',
            'title2' => 'daftar_post',
            'posts' => Post::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create',[
            'title1' => 'post',
            'title2' => 'daftar_post',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'slug' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
        ]);

        $validate['foto'] = $request->file('foto')->store('post_foto');
        $validate['author_id'] = auth()->user()->author_id;

        Post::create($validate);
        return redirect('/admin/post')->with('sukses', 'sukses menambahkan post baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show',[
            'title1' => 'post',
            'title2' => 'daftar_post',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit',[
            'title1' => 'post',
            'title2' => 'daftar_post',
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'slug' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
        ]);

        if ($request['foto'] != null) {
            $validate['foto'] = $request->file('foto')->store('post_foto');
        }
        else {
            $validate['foto'] = $post->foto;
        }

        Post::where('id', $post->id)->update($validate);
        return redirect('/admin/post')->with('sukses', 'sukses mengubah postingan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/admin/post')->with('sukses', 'sukses menghapus postingan!');
    }

    public function single_post($slug, Post $post)
    {
        $get_post = Post::where('slug',$slug)->get();
        $watch = $get_post[0]->view;
        $watch++;
        Post::where('slug', $slug)->update(['view'=>$watch]);
        $kategori = Post::select('kategori')->distinct()->get();
        $posts = Post::latest()->take(4)->get();
        $favs = Post::orderBy('like')->take(4)->get();
        $left = Post::where('id', $get_post[0]->id-1)->first();
        $right = Post::where('id', $get_post[0]->id+1)->first();

        return view('public.post.single_post',[
            'title1' => 'Post',
            'post' => Post::where('slug', $slug)->get(),
            'kategori' => $kategori,
            'posts' => $posts,
            'favs' => $favs,
            'left' => $left,
            'right' => $right,
        ]);
    }

    public function all()
    {
        $post = Post::latest();
        if (request('cari')) 
        {
            $first_post = $post->where('judul','like','%' . request('cari'). '%')
                                // ->orWhere('isi','like','%' . request('cari'). '%')
                                ->first();
            $posts = $post->where('judul','like','%' . request('cari'). '%')
                                // ->orWhere('isi','like','%' . request('cari'). '%')
                                ->skip(1)->take(Post::count()-1)->get();
        }
        else 
        {
            $first_post = $post->first();
            $posts = $post->skip(1)->take(Post::count()-1)->paginate(9);
        }
        
        // dd($posts);
        return view('public.post.all_post',[
            'title1' => 'post', 
            'first_post' => $first_post,
            'posts' => $posts,
        ]);
    }

    public function check_slug(Request $request)
    {
        // dd('sukses');
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }

    public function like(Post $post, Request $request)
    {
        
        $like = $post->get_like($request->post_id);
        // $like = $post->get_like($request->post_id);
        if ($request->like === "Like") {
            $like++;
        } else {
            $like--;
        }
        Post::where('id', $request->post_id)->update(['like' => $like]);
        $like_count = $like;
        return response()->json(['like_count' => $like_count]);
    }

}
