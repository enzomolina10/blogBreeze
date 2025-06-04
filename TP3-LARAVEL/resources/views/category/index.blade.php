@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Listado de posts</h1>
    <a href="/category/create" class="inline-block mb-4 text-green-700 underline hover:text-green-900">
        Nuevo post
    </a>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <a href="{{ url('category/show/' . $post->id) }}" class="relative group overflow-hidden rounded-lg shadow-lg">
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
@endsection
