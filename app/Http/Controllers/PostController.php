<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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
        if ($request->file('image')){
            $post->image=$request->file('image')->store('images');
        }
        $post->user_id = Auth::user()->id;

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
        if($post->image && Storage::disk('public')->exists($post->image)){
            Storage::delete($post->image);
        }
        $post->delete();
        return redirect('posts');
    }
}
