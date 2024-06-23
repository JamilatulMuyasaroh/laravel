@extends('posts.layouts.app')

@section('container')
    <div class="container mx-auto py-8">
        <h1 class="text-4xl md:text-5xl lg:text-5xl font-bold text-center mb-8 text-gray-900 dark:text-white">Post Berita</h1>
        <form class="max-w-2xl mx-auto space-y-6" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label class="block text-lg font-bold text-gray-700 dark:text-gray-300 mb-2" for="gambar">Gambar</label>
                <input class="w-full px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Gambar" id="gambar" type="file" name="gambar">
            </div>
            <div>
                <label class="block text-lg font-bold text-gray-700 dark:text-gray-300 mb-2" for="judul">Judul Berita</label>
                <input class="w-full px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Judul" id="judul" type="text" name="judul" value="{{ old('judul') }}">
            </div>
            <div>
                <label class="block text-lg font-bold text-gray-700 dark:text-gray-300 mb-2" for="berita">Berita</label>
                <textarea class="w-full h-64 px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Berita" id="berita" name="berita">{{ old('berita') }}</textarea>
            </div>
            <div>
                <label class="block text-lg font-bold text-gray-700 dark:text-gray-300 mb-2" for="tahun">Tahun</label>
                <input class="w-full px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Tahun" id="tahun" type="number" name="tahun" value="{{ old('tahun') }}">
            </div>
            <div>
                <label class="block text-lg font-bold text-gray-700 dark:text-gray-300 mb-2" for="penulis">Penulis Berita</label>
                <input class="w-full px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Penulis" id="penulis" type="text" name="penulis" value="{{ old('penulis') }}">
            </div>
            <button class="w-full bg-pink-500 hover:bg-pink-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-opacity-50" type="submit">Create</button>
        </form>
    </div>
@endsection
