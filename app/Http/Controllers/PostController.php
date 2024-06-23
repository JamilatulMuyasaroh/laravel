<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        return view('posts.home', compact('posts'));
    }

    public function create(Request $request)
    {
        return view('posts.create');
    }

    public function table()
    {
        $posts = Post::all();
        return view('posts.table', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => ['required', 'string', 'max:300'], // maksimal 300 karakter untuk judul
            'berita' => ['required', 'string', 'max:10000'], // maksimal 10000 karakter untuk berita
            'tahun' => ['required', 'integer', 'max:2024'], // maksimal tahun 2024
            'penulis' => ['required'], // harus diisi
            'gambar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5000'], // nullable, harus dalam bentuk jpeg/png/jpg/gif, max ukuran 5000kb
        ]);

        $post = new Post();
        $post->judul = $request->judul;
        $post->berita = $request->berita;
        $post->tahun = $request->tahun;
        $post->penulis = $request->penulis;

        if ($request->hasFile('gambar')) {
            $filePath = $request->file('gambar')->store('images', 'public');
            $post->gambar = '/storage/' . $filePath;
        }

        $post->save();

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => ['required', 'string', 'max:300'], // maksimal 300 karakter untuk judul
            'berita' => ['required', 'string', 'max:10000'], // maksimal 10000 karakter untuk berita
            'tahun' => ['required', 'integer', 'max:2024'], // maksimal tahun 2024
            'penulis' => ['required'], // harus diisi
            'gambar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5000'], // nullable, harus dalam bentuk jpeg/png/jpg/gif, max ukuran 5000kb
        ]);

        $post = Post::findOrFail($id);
        $post->judul = $request->judul;
        $post->berita = $request->berita;
        $post->tahun = $request->tahun;
        $post->penulis = $request->penulis;

        if ($request->hasFile('gambar')) {
            $filePath = $request->file('gambar')->store('images', 'public');
            $post->gambar = '/storage/' . $filePath;
        }

        $post->save();

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
    
        // Hapus gambar dari storage jika ada
        if ($post->gambar) {
            Storage::delete('public/' . $post->gambar);
        }
    
        // Hapus post dari database
        $post->delete();
    
        return redirect()->route('posts.table');
    }    
    
}