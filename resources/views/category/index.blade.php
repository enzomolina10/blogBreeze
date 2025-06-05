@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-extrabold tracking-tight text-green-800 drop-shadow-lg mb-6">Listado de posts</h1>
    @if (isset($category))
        <h2 class="text-2xl mb-6 text-green-900 text-left font-bold">Filtrando por categoría: <span
            class="font-black">{{ ucfirst($category) }}</span></h2>
    @endif

    <a href="/category/create"
        class="inline-block mb-4 px-6 py-3 bg-green-600 text-white font-bold text-xl rounded-lg shadow hover:bg-green-700 transition-colors duration-200">
        Nuevo post
    </a>
    @if ($posts->isEmpty())
        <p class="text-gray-700">No hay posts disponibles para esta categoría.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <a href="{{ route('category.show', ['id' => $post->id]) }}" class="relative group overflow-hidden rounded-lg shadow-lg">
                    {{-- Imagen del post --}}
                    <img src="{{ $post->poster }}" alt="{{ $post->title }}" class="w-full h-64 object-cover">

                    {{-- Overlay degradado --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                    {{-- Título en la parte baja de la imagen --}}
                    <div class="absolute bottom-0 w-full px-2 pb-2 text-white text-center z-10">
                        <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                    </div>
                </a>
            @endforeach


        </div>
    @endif
    <div class="mt-10">
            {{ $posts->links() }}
        </div>
@endsection
