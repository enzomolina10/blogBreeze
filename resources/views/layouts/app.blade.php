<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/svg+xml"
        href="https://upload.wikimedia.org/wikipedia/commons/6/6e/Football_%28soccer_ball%29.svg">
    <title>Fulbo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-green-100 font-sans flex flex-col min-h-screen">
    <header class="bg-green-800 text-white p-4">
        <nav class="container mx-auto flex items-center justify-between">
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/bocha3.png') }}" alt="Logo"
                        class="h-32 w-32 object-contain animate-bounce inline-block" />
                </a>
            </div>
           {{--  <h1 class="text-4xl font-extrabold tracking-tight text-green-200 drop-shadow-lg">Fulbo 7</h1> --}}
            <nav class="flex space-x-4 items-center">
                <a href="{{ url('/') }}"
                    class="text-white hover:text-green-200 font-medium transition-colors text-xl">Inicio</a>
                
            <div class="relative group">
                <a href="{{ url('/category') }}"
                    class="text-white hover:text-green-200 font-medium transition-colors text-xl inline-block">Posts</a>
                <div
                    class="absolute left-0 mt-1 w-40 bg-white text-green-800 rounded shadow-lg opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-opacity duration-200 z-10">
                    <a href="{{ url('/category') }}"
                        class="block px-4 py-2 hover:bg-green-200 transition-colors">Todos</a>
                    <a href="{{ url('/category?category=nacional') }}"
                        class="block px-4 py-2 hover:bg-green-200 transition-colors">Nacional</a>
                    <a href="{{ url('/category?category=internacional') }}"
                        class="block px-4 py-2 hover:bg-green-200 transition-colors">Internacional</a>
                </div>
            </div>

            @auth
                <a href="{{ route('profile.edit') }}"
                    class="text-white hover:text-green-200 font-medium transition-colors text-xl">Perfil</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit"
                        class="text-white hover:text-green-200 font-medium transition-colors text-xl">Cerrar Sesion</button>
                </form>
            @else
                <a href="{{ url('/login') }}"
                    class="text-white hover:text-green-200 font-medium transition-colors text-xl">Iniciar Sesion</a>
                <a href="{{ url('/register') }}"
                    class="text-white hover:text-green-200 font-medium transition-colors text-xl">Registrarse</a>
            @endauth
        </nav>
    </nav>
    </header>
    <main class="container mx-auto p-6 flex-grow">
        @yield('content')
    </main>
    <footer class="bg-green-800 text-white text-center p-4 w-full mt-auto">
        &copy; {{ date('Y') }} Fulbo 7. <a href="https://github.com/RodriVelo/TP3-LARAVEL" target="_blank"
            class="text-green-300 hover:text-green-200">GitHub</a>.
    </footer>
</body>

</html>
