@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Imagen del post -->
        <div class="relative h-72 md:h-96">
            <img src="{{ $post->poster }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            <div class="absolute bottom-0 w-full p-6">
                <div class="mb-2">
                    <span
                        class="inline-block px-3 py-1 bg-green-600 text-white text-sm font-semibold rounded-full">{{ $post->category }}</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $post->title }}</h1>
            </div>
        </div>

        <!-- Contenido del post -->
        <div class="p-6">
            <div class="prose prose-lg max-w-none mb-8">
                <p class="text-gray-700 whitespace-pre-line">{{ $post->content }}</p>
            </div>

            <!-- Información adicional -->
            <div class="flex items-center text-sm text-gray-500 mb-6">
                <span class="mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ $post->created_at->format('d/m/Y') }}
                </span>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    {{ $post->created_at->diffForHumans() }}
                </span>
            </div>

            <!-- Botones de acción -->
            <div class="flex justify-between items-center mt-8 border-t pt-6">
                <a href="{{ route('category.index') }}"
                    class="inline-flex items-center px-4 py-2 bg-gray-100 border border-gray-300 rounded-md font-semibold text-gray-700 hover:bg-gray-200 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Volver
                </a>

                <div class="flex space-x-2">
                    @can('update', $post)
                        <a href="/category/edit/{{ $post->id }}"
                            class="inline-flex items-center px-4 py-2 bg-blue-600 rounded-md font-semibold text-white hover:bg-blue-700 transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Editar
                        </a>
                    @endcan

                    @can('update', $post)
                        <form action="/category/{{ $post->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-red-600 rounded-md font-semibold text-white hover:bg-red-700 transition-colors duration-200"
                                onclick="return confirm('¿Estás seguro de que deseas eliminar este post?')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v10M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3" />
                                </svg>
                                Eliminar
                            </button>
                        </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection
