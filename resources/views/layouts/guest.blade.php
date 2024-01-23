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
        @vite(['resources/css/app.css'])
        @vite(['resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 antialiased ">
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 bg-green-600 w-full border-b-2 border-b-amber-600 border-bottom text-white">
            <a href="{{ url('/') }}"
               class="font-semibold hover:text-orange-300 hover:underline focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-5">Search</a>
            <a href="{{ url('/dashboard') }}"
               class="font-semibold hover:text-orange-300 hover:underline focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-5">Dashboard</a>
            <a href="{{ url('/about-us') }}"
               class="font-semibold hover:text-orange-300 hover:underline focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-5">About
                Us</a>

            <a href="{{ url('/faq') }}"
               class="font-semibold hover:text-orange-300 hover:underline focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-5">FAQ</a>

            <a href="{{ route('login') }}"
               class="font-semibold hover:text-orange-300 hover:underline focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>
        </div>

        <div class="max-w-7xl p-6 lg:p-8 mt-8 mx-auto">
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>
