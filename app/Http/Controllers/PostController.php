<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
        public function __construct()
    {
    $this->middleware('auth', ["except" => ["index", "show"]]
);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //return Post::All();
        $data = array(
            'id' => "posts",
            'posts' => Post::orderBy('created_at', 'desc')->paginate(10)
        );
        return view('posts.index', ["title" => "Blog",])->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create', ["title" => "Create a Post",]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();
        return redirect('posts')->with('post_berhasil', 'data telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return Post::find($id);
        $data = array(
            'id' => "posts",
            'posts' => Post::find($id)
        );
        return view('posts.show', ["title" => "Posts",])->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "posts",
            'posts' => Post::find($id)
        );
        return view('posts.edit', ["title" => "Edit Post"])->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();
        return redirect('posts')->with('post_update', 'data telah diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete(); // menghapus data dari database
        return redirect('posts')->with('post_delete', 'data telah dihapus');
    }
}
