@extends('posts.layouts.app')

@section('container')
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white mb-4">Judul Berita: {{ $post->judul}}</h1>
    <p class="mb-4 text-2xl font-semibold text-gray-500 dark:text-gray-400">Berita: {{ $post->berita }}</p>
    <p class="text-lg text-gray-600 dark:text-gray-300">Tahun: {{ $post->tahun}}</p>
    <p class="text-lg text-gray-600 dark:text-gray-300">Penulis: {{ $post->penulis }}</p>
@endsection
