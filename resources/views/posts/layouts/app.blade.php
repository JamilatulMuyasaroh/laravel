<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Berita')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-pink-100 font-montserrat"> 
    <header class="bg-pink-800 text-white">
        <nav class="container mx-auto flex items-center justify-center py-4">
            <a href="{{ route('home') }}" class="hover:text-gray-100 mx-4 font-bold text-lg">Berita</a>
            <a href="{{ route('posts.create') }}" class="hover:text-gray-100 mx-4 font-bold text-lg">Post Berita</a>
            <a href="{{ route('posts.table') }}" class="hover:text-gray-100 mx-4 font-bold text-lg">Table</a>
        </nav>
    </header>

    <main class="container mx-auto py-8">
        <div class="max-w-screen-xl mx-auto"> 
            @yield('container')
        </div>
    </main>
</body>
</html>
