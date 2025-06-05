@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-extrabold tracking-tight text-green-800 drop-shadow-lg mb-6">TUS POSTS</h1>
    <div>
        <a href="/category/create"
        class="inline-block mb-4 px-6 py-3 bg-green-600 text-white font-bold text-xl rounded-lg shadow hover:bg-green-700 transition-colors duration-200">
        Nuevo post
    </a>
    </div>
    @if ($posts->isEmpty())
        <div class="text-center text-gray-600 text-lg mt-10">
            Aún no creaste ningún post.
        </div>
        
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <a href="{{ route('category.show', ['id' => $post->id]) }}" class="relative group overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ $post->poster }}" alt="{{ $post->title }}" class="w-full h-96 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 w-full px-2 pb-2 text-white text-center z-10">
                        <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                    </div>
                </a>
            @endforeach
        </div>
        

        {{-- Paginador --}}
        <div class="mt-10">
            {{ $posts->links() }}
        </div>
    @endif
    
    <div class="mt-10 text-center">
        <a href="{{ route('category.index') }}"
           class="inline-block bg-green-800 text-white font-bold px-6 py-3 rounded-lg hover:bg-green-600 transition">
            Ver más posts
        </a>
    </div>
@endsection
