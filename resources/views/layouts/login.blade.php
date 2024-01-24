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
<body class="font-sans text-gray-900 antialiased">
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">
    <div>
        <a href="/">
            <img src="{{ asset('images/BucksNourishLogo.jpg') }}" alt="Your Logo" class="block h-48 w-22">
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-6 mb-36 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.2)";>
        {{ $slot }}
    </div>
</div>
</body>
</html>
