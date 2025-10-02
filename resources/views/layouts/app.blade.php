<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Auth System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <a href="/" class="text-xl font-bold text-gray-800">Auth System</a>
            </div>
            <div class="flex items-center space-x-4">
                @auth
                    <span class="text-gray-600">Привет, {{ Auth::user()->first_name }}!</span>
                    <a href="{{ route('my-account') }}" class="text-gray-600 hover:text-gray-800">Мой аккаунт</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-gray-800">Выйти</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800">Войти</a>
                    <a href="{{ route('signup') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Регистрация</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<main class="py-8">
    <div class="max-w-7xl mx-auto px-4">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('status'))
            <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded mb-4">
                {{ session('status') }}
            </div>
        @endif

        @yield('content')
    </div>
</main>
</body>
</html>
