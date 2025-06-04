<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml"
        href="https://upload.wikimedia.org/wikipedia/commons/6/6e/Football_%28soccer_ball%29.svg">
    <title>Fulbo</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-green-100 font-sans flex flex-col min-h-screen">

    <header class="bg-green-800 text-white p-4">
        <nav class="container mx-auto flex items-center justify-between">
            <div>
                <a href="{{ url('/') }}">
                    <img src="../../images/bocha3.png" alt="Logo"
                        class="h-32 w-32 object-contain animate-bounce inline-block" />
                </a>
            </div>
            <h1 class="text-4xl font-extrabold tracking-tight text-green-200 drop-shadow-lg">Fulbo 7</h1>
            </div>
            <nav class="flex space-x-6 items-center">
                <a href="{{ url('/') }}"
                    class="text-white hover:text-green-200 font-medium transition-colors text-xl">Inicio</a>
                <a href="{{ url('/category') }}"
                    class="text-white hover:text-green-200 font-medium transition-colors text-xl">Categorías</a>
                <a href="{{ url('/login') }}"
                    class="text-white hover:text-green-200 font-medium transition-colors text-xl">Login</a>
            </nav>
        </nav>
    </header>
        <a class href="/category">Volver</a>
    <main class="container mx-auto p-6 flex-grow">
        @yield('content')
    </main>

    <footer class="bg-green-800 text-white text-center p-4 w-full mt-auto">
        &copy; {{ date('Y') }} Fulbo 7. <a href="https://github.com/RodriVelo/TP3-LARAVEL" target="_blank"
            class="text-green-300 hover:text-green-200">GitHub</a>.
    </footer>


</body>

</html>
