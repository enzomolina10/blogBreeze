@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center">
  <!-- Primer bloque -->
  <div class="w-1/2 p-4">
    <h1 class="text-2xl tracking-tight text-green-800 drop-shadow-lg text-center mb-6">
      Bienvenido al blog para amantes del fútbol.
      <br>
      Un espacio para debatir, comparar y compartir opiniones.
    </h1>
  </div>

  <!-- Barra vertical -->
  <div class="w-px h-48 bg-green-800 mx-4"></div>

  <!-- Segundo bloque -->
  <div class="w-1/2 p-4">
    <h1 class="text-2xl tracking-tight text-green-800 drop-shadow-lg text-center mb-6">
      Escribí tus propias noticias y mantenete informado.
      <br>
      Sumate a la comunidad que vive el deporte con pasión.
    </h1>
  </div>
</div>





<h1 class="text-4xl font-extrabold tracking-tight text-green-800 drop-shadow-lg mb-6">ÚLTIMAS NOTICIAS</h1>
    


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <a href="{{ route('category.show', ['id' => $post->id]) }}"
                class="relative group overflow-hidden rounded-lg shadow-lg drop-shadow-[0_4px_6px_rgba(0,0,0,0.5)] transition-transform duration-300 transform hover:-translate-y-1 hover:scale-105">

                <img src="{{ $post->poster }}" alt="{{ $post->title }}" class="w-full h-96 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                <div class="absolute bottom-0 w-full px-2 pb-2 text-white text-center z-10">
                    <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-10 text-center ">
        <a href="{{ route('category.index') }}"
           class="inline-block bg-green-800 text-white font-bold px-6 py-3 rounded-lg hover:bg-gray-600 transition">Ver más posts</a>
    </div>
@endsection
