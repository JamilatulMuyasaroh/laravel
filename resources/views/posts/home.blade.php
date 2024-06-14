@extends('posts.layouts.app')

@section('container')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-8 text-gray-900 dark:text-white">Berita</h1>

        <div class="grid grid-cols-1 gap-8">
            @foreach ($posts as $post)
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg p-8 max-w-7xl mx-auto bg-white dark:bg-gray-800 shadow-xl">
                    <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-200">{{ $post->judul }}</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mt-6">{{ $post->berita }}</p>
                    <div class="mt-8 flex justify-between items-center">
                        <p class="text-lg text-gray-600 dark:text-gray-400">Tahun: {{ $post->tahun }}</p>
                        <p class="text-lg text-gray-600 dark:text-gray-400">Penulis: {{ $post->penulis }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
