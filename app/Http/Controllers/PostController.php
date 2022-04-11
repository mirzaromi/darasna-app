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
            'tag' => 'required'
        ]);

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
            'tag' => 'required'
        ]);

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

    public function check_slug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }

    public function single_post($slug, Post $post)
    {
        $get_post = Post::where('slug',$slug)->get();
        $watch = $get_post[0]->view;
        $watch++;
        Post::where('slug', $slug)->update(['view'=>$watch]);
                
        return view('public.post.single_post',[
            'title1' => 'Post',
            'post' => Post::where('slug', $slug)->get()
        ]);
    }

    public function all()
    {
        return view('public.post.all_post',[
            'title1' => 'post', 
        ]);
    }

}
