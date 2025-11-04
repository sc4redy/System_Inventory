<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        Post::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'user_id' => $request->user()->id,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post berhasil dibuat!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $post->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post berhasil diupdate!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus!');
    }
}
