<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Berita</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-align: center;
        }
        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            margin-bottom: 1rem;
            font-size: 1rem;
        }
        .form-button {
            width: 100%;
            padding: 0.75rem;
            background-color: #C02658;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }
        .form-button:hover {
            background-color: #E64E80;
        }
        .form-link {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #E64E80;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="form-title">Login</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="sr-only">Email:</label>
                <input id="email" type="email" name="email" placeholder="Your email" required autofocus
                       class="form-input @error('email') border-red-500 @enderror"
                       value="{{ old('email') }}">
                @error('email')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password:</label>
                <input id="password" type="password" name="password" placeholder="Your password" required
                       class="form-input @error('password') border-red-500 @enderror">
                @error('password')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit" class="form-button">Login</button>
            </div>
        </form>

        <a href="{{ route('register') }}" class="form-link">Don't have an account? Register here</a>
    </div>
</body>
</html>
