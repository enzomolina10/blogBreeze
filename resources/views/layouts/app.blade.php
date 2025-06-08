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
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <!-- Logo y título -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/bocha3.png') }}" alt="Logo"
                            class="h-28 w-28 object-contain animate-bounce" />
                    </a>
                    <h1 class="text-4xl font-extrabold tracking-tight text-green-200 drop-shadow-lg">Fulbo 7</h1>
                </div>

                <!-- Menú de navegación -->
                <nav class="flex items-center space-x-6">
                    <a href="{{ route('home') }}"
                        class="text-white hover:text-green-200 font-medium transition-colors text-xl px-4 py-2 rounded-lg hover:bg-green-700">Inicio</a>

                    <!-- Menú desplegable de Posts -->
                    <div class="relative group">
                        <a href="{{ route('category.index') }}"
                            class="text-white hover:text-green-200 font-medium transition-colors text-xl px-4 py-2 rounded-lg hover:bg-green-700 inline-flex items-center">
                            Posts
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <div
                            class="absolute left-0 mt-0 w-48 bg-white text-green-800 rounded-lg shadow-lg opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-in-out z-10">
                            <a href="{{ route('category.index') }}"
                                class="block w-full px-4 py-3 hover:bg-green-200 rounded-t-lg transition-colors">Todos</a>
                            <a href="{{ route('category.index', ['category' => 'nacional']) }}"
                                class="block w-full px-4 py-3 hover:bg-green-200 transition-colors">Nacional</a>
                            <a href="{{ route('category.index', ['category' => 'internacional']) }}"
                                class="block w-full px-4 py-3 hover:bg-green-200 rounded-b-lg transition-colors">Internacional</a>
                        </div>
                    </div>

                    @auth
                        <!-- Menú desplegable de Perfil -->
                        <div class="relative group">
                            <a href="{{ route('profile.edit') }}"
                                class="text-white hover:text-green-200 font-medium transition-colors text-xl px-4 py-2 rounded-lg hover:bg-green-700 inline-flex items-center">
                                Perfil
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <div
                                class="absolute right-0 mt-0 w-48 bg-white text-green-800 rounded-lg shadow-lg opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-in-out z-10">
                                <a href="{{ route('category.dashboard') }}"
                                    class="flex items-center w-full px-4 py-3 hover:bg-green-200 rounded-t-lg transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                    Tus posts
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="flex items-center w-full text-left px-4 py-3 hover:bg-green-200 rounded-b-lg transition-colors text-red-600 font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        Cerrar Sesión
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-white hover:text-green-200 font-medium transition-colors text-xl px-4 py-2 rounded-lg hover:bg-green-700">Iniciar
                            Sesión</a>
                        <a href="{{ route('register') }}"
                            class="text-white hover:text-green-200 font-medium transition-colors text-xl px-4 py-2 rounded-lg hover:bg-green-700">Registrarse</a>
                    @endauth
                </nav>
            </div>
        </div>
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
