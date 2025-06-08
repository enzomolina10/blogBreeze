<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@extends('layouts.app')

@section('content')
    <body class="font-sans text-black antialiased">
        <div class="flex flex-col sm:justify-center items-center mt-6 pt-6 sm:pt-0">
            <div>
                <a href="/">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Football_%28soccer_ball%29.svg" alt="Logo"
                        class="h-16 w-16 object-contain animate-bounce inline-block" />
                </a>
            </div>

            <div
                class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-300 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
    </html>
@endsection
