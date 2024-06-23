@extends('posts.layouts.app')

@section('container')
    <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold leading-none text-gray-900 mb-4">{{ $post->judul }}</h1>
        <p class="text-xl font-semibold text-gray-600 mb-4">Berita: {{ $post->berita }}</p>
        <p class="text-lg text-gray-600 mb-2">Tahun: {{ $post->tahun }}</p>
        <p class="text-lg text-gray-600 mb-4">Penulis: {{ $post->penulis }}</p>
        @if($post->gambar)
            <div class="mt-4">
                <img src="{{ $post->gambar }}" alt="{{ $post->judul }}" class="img-thumbnail" width="500">
            </div>
        @endif
    </div>
@endsection
