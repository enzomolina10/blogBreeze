@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold">Formulario para crear un nuevo post</h1>
    <form action="/category" method="POST">

        @csrf  <!-- token dentro del formulario que lo coloca en un input oculto para saber si el formulario te pertenece-->
        
        <label for="">
            Título:
            <input class="border" type="text" name="title">
        </label>
        <br>
        <label for="">
            Categoría:
            <select class="border" name="category" id="">
                <option value="Internacional">Internacional</option>
                <option value="Nacional">Nacional</option>
            </select>
        </label>
        <br>
        <label>
            Contenido:
            <br>
            <textarea class="border" name="content"></textarea>  
        </label>
        <br>
        <label>
            URL de la imagen:
            <input class="border" type="text" name="poster">
        </label>
        <br>
        <button class="bg-green-800" type="submit">Crear post</button>
    </form>
    @endsection