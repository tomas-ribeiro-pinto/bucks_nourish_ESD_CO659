<div class="grid grid-cols-5 gap-1 px-20 sm:justify-center">
    <div class="col-span-3 z-0">
        <x-maps-leaflet class="rounded-xl" :centerPoint="['lat' => $lat ?: 0, 'long' => $lng ?: 0]"
                        :markers="$markers"></x-maps-leaflet>
    </div>
    <div class="col col-span-2">
        <div class="bg-gray-100 rounded-t-2xl">
            <div class="pt-4 ml-6">
                <h1 class="text-2xl font-bold">Search Results:</h1>
            </div>
            <div>
                <!-- Active filters -->
                <div>
                    <div class="max-w-7xl py-3 sm:flex sm:items-center lg:px-8">
                        <div x-data="{ open: false }"
                             class="border-t border-gray-200">
                            <template x-if="!open">
                                <button @click="open = ! open"
                                        type="button"
                                        class="inline-flex items-center text-white font-semi-bold bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-4 py-2">
                                    Filter
                                    <span class="ml-4 flex items-center">
                                <svg class="rotate-0 h-5 w-5 transform" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                                </button>
                            </template>
                            <template x-if="open">
                                <button @click="open = ! open"
                                        type="button"
                                        class="inline-flex items-center text-white font-semi-bold bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-4 py-2">
                                    Filter
                                    <span class="ml-4 flex items-center">
                                <svg class="-rotate-180 h-5 w-5 transform" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                                </button>
                            </template>
                            <div x-show="open"
                                 @click.outside="open = false"
                                 style="display: none"
                                 class="z-10 mt-2 bg-gray-600 p-2 rounded-lg absolute border border-gray-50 text-white" id="filter-section-1">
                                <div class="space-y-2">
                                    @foreach($filters as $filter)
                                        <div>
                                            <input wire:model="filter" type="checkbox" id="{{$filter}}" value="{{ $filter }}" wire:change="updateFilters('{{ $filter }}')" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="{{$filter}}">{{ $filter }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 sm:mt-0 ml-2 flex flex-row">
                            @foreach($currentFilters as $filter)
                                <div class="ml-1 flex flex-row items-center">
                    <span class="m-1 inline-flex items-center rounded-full border border-gray-200 bg-white py-1.5 pl-3 pr-2 text-sm font-medium text-gray-900">
                      <span>{{$filter}}</span>
                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
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