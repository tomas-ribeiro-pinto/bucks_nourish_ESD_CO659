<div x-data="{ details: false }" class="col-span-full md:col-span-2 mt-4 md:mt-0">
    <div x-show="details" style="display: none;">
        <x-foodbank-details wire:model="selectedFoodbank" :foodbank="$selectedFoodbank"/>
    </div>
    <div x-show="!details">
        <div class="bg-gray-100 rounded-t-2xl">
            <div class="pt-4 ml-6 flex">
                <h1 class="text-2xl font-bold">Search Results:</h1>
                <span class="text-lg inline-block mt-auto ml-3">{{$search}}</span>
            </div>
            <!-- Active filters -->
            <div>
                <div class="max-w-7xl py-3 sm:flex sm:items-center px-4 lg:px-8">
                    <div x-data="{ open: false }"
                         class="">
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
                                <form method="POST" action="/filter">
                                    @csrf
                                    <input type="hidden" name="search" value="{{$search}}"/>
                                    @foreach($filters as $filter)
                                        <div>
                                            <input {{!in_array($filter, $currentFilters ?: []) ?: 'checked'}} name="filters[]" type="checkbox" id="{{$filter}}" value="{{ $filter }}" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="{{$filter}}">{{ $filter }}</label>
                                        </div>
                                    @endforeach
                                    <button type="submit"
                                            class="mt-2 text-white font-semi-bold bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold rounded-lg text-sm px-4 py-2">
                                        Apply
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-0 ml-2 flex flex-row">
                    </div>
                </div>
            </div>
        </div>
        @if(count($foodbanks) == 0)
            <div class="row p-3 rounded-lg relative mb-3">
                <div class="p-4">
                    <h2 class="bold text-xl">No results found</h2>
                    <p>Try searching for a different location or different filter</p>
                </div>
            </div>
        @endif
        @for($i = 0; $i < count($foodbanks); $i++)
            <div class="row p-3 hover:bg-gray-100 rounded-lg relative mb-3">
                <div class="p-4">
                    <h2 class="bold text-xl">{{$foodbanks[$i]->name}}</h2>
                    <p>{{$foodbanks[$i]->address}}</p>
                    <div class="absolute bottom-0 right-0">
                        <a class="text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center :ring-green-800" href="https://www.google.com/maps/dir//{{$markers[$i]['lat']}},{{$markers[$i]['long']}}" target="_blank" rel="noopener noreferrer">Directions</a>
                        <button class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 text-center :ring-gray-800" @click="details = true" wire:click="selectFoodbank({{$foodbanks[$i]}})">Details</button>
                    </div>
                </div>
                <hr>
            </div>
        @endfor
    </div>
</div>