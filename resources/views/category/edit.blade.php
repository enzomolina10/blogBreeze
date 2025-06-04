@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold">Formulario para crear un nuevo post</h1>
    <form action="/category/{{$post->id}}" method="POST">

        @csrf  <!-- token dentro del formulario que lo coloca en un input oculto para saber si el formulario te pertenece-->
        
        @method('PUT')


        <label for="">
            Título:
            <input class="border" type="text" name="title" value="{{ $post->title }}">
        </label>
        <br>
        <label for="">
            Categoría:
            <select class="border" name="category" value="{{ $post->category }}">
                <option value="Internacional">Internacional</option>
                <option value="Nacional">Nacional</option>
            </select>
        </label>
        <br>
        <label>
            Contenido:
            <br>
            <textarea class="border" name="content">{{ $post->content }}</textarea>  
        </label>
        <br>
        <label>
            URL de la imagen:
            <input class="border" type="text" name="poster" value="{{ $post->poster }}">
        </label>
        <br>
        <button class="bg-green-800" type="submit">Actualizar post</button>
    </form>
    @endsection