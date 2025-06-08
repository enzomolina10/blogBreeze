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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>


    <header class="bg-gradient-to-r from-gray-400 to-gray-900 text-white p-4">
  <nav class="container mx-auto flex items-center justify-between">
    <!-- Izquierda: Logo + Texto -->
    <div class="flex items-center space-x-4 text-green-200">
      <a href="{{ route('home') }}">
        <img src="{{ asset('images/leon.png') }}" alt="Logo" class="h-32 w-32 object-contain" />
      </a>
      <h1 class="text-4xl font-extrabold tracking-tight drop-shadow-lg">Fulbo 7</h1>
    </div>

    <!-- Derecha: Menú -->
    <nav class="flex space-x-4 items-center">
      <a href="{{ route('home') }}"
        class="text-white hover:text-green-200 font-medium transition-colors text-xl">Inicio</a>

      <div class="relative group">
        <a href="{{ route('category.index') }}"
          class="text-white hover:text-green-200 font-medium transition-colors text-xl inline-block">Posts</a>
        <div
          class="absolute left-0 mt-0 w-40 bg-white text-green-800 rounded shadow-lg opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-opacity duration-200 z-10">
          <a href="{{ route('category.index') }}"
            class="block px-4 py-2 hover:bg-green-200 rounded transition-colors">Todos</a>
          <a href="{{ route('category.index', ['category' => 'nacional']) }}"
            class="block px-4 py-2 hover:bg-green-200 rounded transition-colors">Nacional</a>
          <a href="{{ route('category.index', ['category' => 'internacional']) }}"
            class="block px-4 py-2 hover:bg-green-200 rounded transition-colors">Internacional</a>
        </div>
      </div>

      @auth
      <div class="relative group">
        <a href="{{ route('profile.edit') }}"
          class="text-white hover:text-green-200 mt-1 font-medium transition-colors text-xl">Perfil</a>
        <div
          class="absolute left-0 mt-0 w-40 bg-white text-green-800 rounded shadow-lg opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-opacity duration-200 z-10">
          <a href="{{ route('category.dashboard') }}"
            class="block px-4 py-2 hover:bg-green-200 rounded transition-colors">Tus posts</a>
        </div>
      </div>
      <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf
        <button type="submit"
          class="text-white hover:text-green-200 font-medium transition-colors text-xl">Cerrar Sesion</button>
      </form>
      @else
      <a href="{{ route('login') }}"
        class="text-white hover:text-green-200 font-medium transition-colors text-xl">Iniciar Sesion</a>
      <a href="{{ route('register') }}"
        class="text-white hover:text-green-200 font-medium transition-colors text-xl">Registrarse</a>
      @endauth
    </nav>
  </nav>
</header>

<body class="bg-white font-montserrat flex flex-col min-h-screen">
    <main class="container mx-auto p-6 flex-grow">
        @yield('content')
    </main>

    @stack('js')
    <script>
        Swal.fire(@json(session('swal')));
    </script>
    <footer class="bg-gradient-to-r from-gray-400 to-gray-900 text-white text-center p-4 w-full mt-auto">
        &copy; {{ date('Y') }} Fulbo 7. <a href="https://github.com/RodriVelo/TP3-LARAVEL" target="_blank"
            class="text-green-300 hover:text-green-200">GitHub</a>.
    </footer>
</body>

</html>
