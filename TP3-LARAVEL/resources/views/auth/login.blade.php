@extends('layouts.app')

@section('content')
<div class="flex justify-center">
<div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
    <div class="flex justify-center mb-6">
    
      <div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Football_%28soccer_ball%29.svg" 
             alt="Logo"
             class="w-12 h-12">
      </div>
    </div>

    <form action="#" method="POST" class="space-y-5">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input id="email" name="email" type="email" required
               class="w-full mt-1 px-4 py-2 border rounded-lg">
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
        <input id="password" name="password" type="password" required
               class="w-full mt-1 px-4 py-2 border rounded-lg">
      </div>

      <div class="flex flex-col">
        
        <a href="#" class="text-sm text-green-800 hover:underline pb-3">¿Olvidaste tu contraseña?</a>
      <a href="#" class="text-sm text-green-800 hover:underline">Registrarse</a>
    </div>

      <button type="submit"
              class="w-full py-2 px-4 bg-green-800 text-white rounded-lg hover:bg-green-900 transition">
        INGRESAR
      </button>
    </form>
  </div>

  </div>
@endsection