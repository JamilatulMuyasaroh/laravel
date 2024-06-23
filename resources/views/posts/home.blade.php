@extends('posts.layouts.app')

@section('container')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-8 text-gray-900 dark:text-white">Berita</h1>

        <div class="grid grid-cols-1 gap-8">
            @foreach ($posts as $post)
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 shadow-xl">
                    @if($post->gambar)
                        <div class="relative">
                            <img src="{{ $post->gambar }}" alt="{{ $post->judul }}" class="object-cover w-full h-72 md:h-96 rounded-t-lg">
                        </div>
                    @endif

                    <div class="p-8">
                        <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-200 mb-4">{{ $post->judul }}</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400">{{ $post->berita }}</p>
                        <div class="mt-4 flex justify-between items-center">
                            <p class="text-lg text-gray-600 dark:text-gray-400">Tahun: {{ $post->tahun }}</p>
                            <p class="text-lg text-gray-600 dark:text-gray-400">Penulis: {{ $post->penulis }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
