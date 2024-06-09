<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function home() {
        $posts = Post::all();
        return view('posts.home', compact('posts'));
    }

    public function create(Request $request) {
        return view('posts.create');
    }
    
    public function table() {
        $posts = Post::all();
        return view('posts.table', compact('posts'));
    }
    
    public function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required',
            'berita' => 'required',
            'tahun' => 'required|integer', 
            'penulis' => 'required', 
        ]);

        Post::create($request->all());
        return redirect()->route('home');
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'judul' => 'required',
            'berita' => 'required',
            'tahun' => 'required|integer',
            'penulis' => 'required',  
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('home');
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.table');
    }
}
