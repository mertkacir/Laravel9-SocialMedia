<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
    $posts = Post::all();

    return view('home.post.index', compact('posts'));

    }
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create()
    {
        return view('home.post.create');
    }

    public function store(Request $request)
    {
        $post =  new Post();
        $post->title = $request->get('title');
        $post->body = $request->get('body');

        $post->save();

        return redirect('posts');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('home.post.show', compact('post'));
    }

    public function destroy(Post $post,$id)
    {
        $post= Post::find($id);
        $post->delete();
        return redirect('posts');
    }
}
