<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Berita')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #FFDFE0;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #C02658; 
        }

        .nav-container {
            padding: 1rem; 
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        .nav-links a:hover {
            background-color: #F87171; 
        }

        .auth-buttons a {
            color: #B91C1C; 
            background-color: #fff;
            border: 2px solid #B91C1C; 
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .auth-buttons a:hover {
            background-color: #F87171; 
            color: #fff;
        }

        .logout-button {
            color: #fff;
            background-color: #B91C1C; 
            border: 2px solid #B91C1C; 
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .logout-button:hover {
            background-color: #F87171;
            color: #fff;
        }

        .login-register {
            color: #fff;
            font-weight: bold;
            margin-right: 20px;
            text-decoration: none;
        }
        .login-register:hover,
        .auth-buttons a:hover,
        .logout-button:hover {
            background-color: #9A1D1D; 
            color: #fff;
            border-color: #9A1D1D; 
        }
    </style>
</head>
<body> 
    <header class="header">
        <nav class="nav-container">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex space-x-4">
                                @guest
                                    <a href="{{ route('home') }}" class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium login-register">Berita</a>
                                    <a href="{{ route('register') }}" class="bg-red-900 text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
                                    <a href="{{ route('login') }}" class="bg-red-900 text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                                @else
                                    <a href="{{ route('home') }}" class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Berita</a>
                                    <a href="{{ route('posts.create') }}" class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Post Berita</a>
                                    <a href="{{ route('posts.table') }}" class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Table</a>
                                    <a href="{{ route('logout') }}" 
                                       class="bg-red-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                       Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto py-8">
        <div class="max-w-screen-xl mx-auto"> 
            @yield('container')
        </div>
    </main>
</body>
</html>