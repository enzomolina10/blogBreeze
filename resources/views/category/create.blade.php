@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-3xl font-bold text-center mb-8 text-green-800">Crear Nuevo Post</h1>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <form action="/category" method="POST" class="space-y-6">
                @csrf
                <!-- token dentro del formulario que lo coloca en un input oculto para saber si el formulario te pertenece-->

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium mb-2">
                        Título:
                    </label>
                    <input id="title"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                        type="text" name="title" required>
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-gray-700 font-medium mb-2">
                        Categoría:
                    </label>
                    <select id="category"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                        name="category">
                        <option value="Internacional">Internacional</option>
                        <option value="Nacional">Nacional</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-gray-700 font-medium mb-2">
                        Contenido:
                    </label>
                    <textarea id="content"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                        name="content" rows="3" maxlength="255"  required></textarea>
                </div>

                <div class="mb-4">
                    <label for="poster" class="block text-gray-700 font-medium mb-2">
                        URL de la imagen:
                    </label>
                    <input id="poster"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                        type="text" name="poster" required>
                </div>

                <div class="flex items-center justify-between pt-4">
                    <a href="{{ route('category.index') }}"
                        class="px-6 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                        Cancelar
                    </a>
                    <button
                        class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow transition-colors duration-200"
                        type="submit">
                        Crear post
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
