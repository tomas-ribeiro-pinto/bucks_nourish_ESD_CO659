<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Bucks Nourish</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
</head>

<body class="antialiased">
{{--<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center dark:bg-white selection:bg-red-500 selection:text-white">--}}
<div class="relative sm:flex sm:justify-center sm:items-center pt-5 bg-center">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            <a href="{{ url('/dashboard') }}"
               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-black-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 pr-5">Dashboard</a>
            <a href="{{ url('/about-us') }}"
               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-black-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 pr-5">About
                Us</a>

            <a href="{{ url('/faq') }}"
               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-black-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 pr-5">FAQ</a>

            <a href="{{ route('login') }}"
               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-black-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-black-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        </div>
    @endif

    <div class="max-w-7xl p-6 lg:p-8">
        <div class="flex justify-center">
            <img class="w-2/4 " src="images/BucksNourishLogo.jpg" alt="logo">
        </div>
        <div class="justify-center">
            <form method="POST">
                @csrf
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-200 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-900 dark:text-gray-950" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                           name="search"
                           class="block w-full p-4 ps-10 text-l text-gray-900 border border-gray-900 rounded-lg bg-white focus:ring-green-500 focus:border-green-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-900 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-900"
                           placeholder="Location..." required>
                    <button type="submit"
                            class="text-white font-semi-bold absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-4 py-2 dark:bg-customGreen dark:hover:bg-highlightGreen dark:focus:ring-green-800">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="grid grid-cols-5 gap-1 px-20 sm:justify-center">
    <div class="col-span-3">
        <x-maps-leaflet class="rounded-xl" :centerPoint="['lat' => $lat ?: 0, 'long' => $lng ?: 0]"
                        :markers="$markers"></x-maps-leaflet>
    </div>
    <div class="col col-span-2">
        <h1 class="text-2xl font-bold text-center">Search Results:</h1>
        @for($i = 0; $i < count($foodbanks); $i++)
            <div class="row p-3 hover:bg-gray-100 rounded-lg relative mb-3">
                <div class="p-4">
                    <h2 class="bold text-xl">{{$foodbanks[$i]->name}}</h2>
                    <p>{{$foodbanks[$i]->address}}</p>
                    <div class="absolute bottom-0 right-0">
                        <a class="text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center :ring-green-800" href="https://www.google.com/maps/dir//{{$markers[$i]['lat']}},{{$markers[$i]['long']}}" target="_blank" rel="noopener noreferrer">Directions</a>
                        <a class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 text-center :ring-gray-800" href="https://www.google.com/maps/dir//{{$markers[$i]['lat']}},{{$markers[$i]['long']}}" target="_blank" rel="noopener noreferrer">Details</a>
                    </div>
                </div>
                <hr>
            </div>
        @endfor
    </div>
</div>
</body>
</html>
