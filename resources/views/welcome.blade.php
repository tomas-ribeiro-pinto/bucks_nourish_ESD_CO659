<x-guest-layout>
    <div class="">
        <div class="flex justify-center">
            <img class="w-2/4 " src="images/BucksNourishLogo.jpg" alt="logo">
        </div>
        <div class="justify-center w-10/12 mx-auto">
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
                           class="shadow-lg block w-full p-4 ps-10 text-l text-gray-900 border border-gray-900 rounded-lg bg-white focus:ring-green-500 focus:border-green-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-900 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-900"
                           placeholder="Location..." required>

                    <div class="float-right">
                        <button type="submit"
                                class="text-white font-semi-bold absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-4 py-2 dark:bg-customGreen dark:hover:bg-highlightGreen dark:focus:ring-green-800">
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="grid grid-cols-5 gap-1 px-20 sm:justify-center mt-8">
            <div class="col-span-3 z-0">
                <x-maps-leaflet class="rounded-xl" :centerPoint="['lat' => $lat ?: 0, 'long' => $lng ?: 0]"
                                :markers="$markers"></x-maps-leaflet>
            </div>
            @livewire('filter-banks', ['search' => $search, 'currentFilters' => $currentFilters, 'foodbanks' => $foodbanks, 'markers' => $markers])
        </div>
    </div>
</x-guest-layout>