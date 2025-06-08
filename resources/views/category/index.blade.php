@extends('layouts.app')

@section('content')
    
    

     <div class="flex justify-center p-5">
            <form action="{{ route('category.index') }}" method="GET" class="mb-4 flex items-center">
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Buscar posts..."
                    class="flex-grow border border-gray-300 rounded-l-md py-2 pr-96 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                />
                <button
                    type="submit"
                    class="bg-green-800 hover:bg-green-700 text-white rounded-r-md px-6 py-2 transition-colors duration-200"
                >
                    Buscar
                </button>
                </form>

    </div>
<div class="border-t border-gray-300 my-4"></div>

    <div class="flex justify-between py-5">
        <div>
            <h1 class="text-4xl font-extrabold tracking-tight text-green-800 drop-shadow-lg mb-4">Listado de posts</h1> 
            @if (isset($category))
                <h2 class="text-2xl mb-6 text-gray-500 text-left "><span
                    class="font-black font-light">{{ ucfirst($category) }}</span></h2>
            @endif
        </div>

        <div>
            <a href="/category/create"
            class="inline-block mb-4 px-6 py-3 bg-green-800 text-white font-bold text-xl rounded-lg shadow hover:bg-green-700 transition-colors duration-200">
            Nuevo post
            </a>                    
        </div>
    </div>
            
    
    @if ($posts->isEmpty())
        <p class="text-gray-700">No hay posts disponibles para esta categoría.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 ">
           @foreach ($posts as $post)
                <div class="rounded-lg overflow-hidden shadow-lg drop-shadow-[0_4px_6px_rgba(0,0,0,0.5)] transition-transform duration-300 transform hover:-translate-y-1 hover:scale-105">

                    <a href="{{ route('category.show', ['id' => $post->id]) }}" class="relative group">
                        {{-- Imagen del post --}}
                        <img src="{{ $post->poster }}" alt="{{ $post->title }}" class="w-full h-64 object-cover">

                        {{-- Overlay degradado --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                        {{-- Título en la parte baja de la imagen --}}
                        <div class="absolute bottom-0 w-full px-2 pb-2 text-white text-center z-10">
                            <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                        </div>
                    </a>
                </div>
@endforeach



        </div>
    @endif
    <div class="mt-10">
            {{ $posts->links() }}
        </div>
@endsection
