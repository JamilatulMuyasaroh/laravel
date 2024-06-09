@extends('posts.layouts.app')

@section('container')
    <div class="container mx-auto py-8 max-w-full">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-8 text-gray-900 dark:text-white">View Table</h1>
        <div class="overflow-x-auto">
            <table class="mx-auto w-full bg-white dark:bg-gray-800 rounded-lg shadow-md" style="width: 1200px;">
                <thead class="bg-pink-800 text-white dark:bg-red-600 dark:text-gray-200">
                    <tr>
                        <th class="py-3 px-6 border-b border-gray-300 dark:border-gray-600">Judul Berita</th>
                        <th class="py-3 px-6 border-b border-gray-300 dark:border-gray-600">Berita</th>
                        <th class="py-3 px-6 border-b border-gray-300 dark:border-gray-600">Tahun</th>
                        <th class="py-3 px-6 border-b border-gray-300 dark:border-gray-600">Penulis Berita</th>
                        <th class="py-3 px-6 border-b border-gray-300 dark:border-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-900">
                            <td class="py-4 px-6 border-b border-gray-300 dark:border-gray-600">{{ $post->judul }}</td>
                            <td class="py-4 px-6 border-b border-gray-300 dark:border-gray-600">{{ $post->berita }}</td>
                            <td class="py-4 px-6 border-b border-gray-300 dark:border-gray-600">{{ $post->tahun }}</td>
                            <td class="py-4 px-6 border-b border-gray-300 dark:border-gray-600">{{ $post->penulis }}</td>
                            <td class="py-4 px-6 border-b border-gray-300 dark:border-gray-600">
                                <div class="flex">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                    <form action="{{ route('posts.hapus', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
