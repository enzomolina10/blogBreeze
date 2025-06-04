@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <!-- <p><strong>Publicado por:</strong> {{ $post->poster }}</p> -->
     <img src="{{ $post->poster }}" alt="">
    <p>{{ $post->content }}</p>
    <p><strong>Habilitado:</strong> {{ $post->habilitated ? 'Sí' : 'No' }}</p>

    <a class="border" href="/category/edit/{{$post->id}}">
        Editar post
    </a>

    <form action="/category/{{$post->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="border" type="submit">
            Eliminar post
        </button>
    </form>
    @endsection