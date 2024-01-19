<!-- Active filters -->
<div id="#map">
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
                    <form method="POST" action="/filter">
                        @csrf
{{--                        <input type="hidden" name="foodbanks" value="{{$foodbanks}}"/>--}}
{{--                        <input type="hidden" name="lat" value="{{$lat}}"/>--}}
{{--                        <input type="hidden" name="lng" value="{{$lng}}"/>--}}
{{--                        <input type="hidden" name="markers" value="{{$markers}}"/>--}}
                            <input type="hidden" name="search" value="{{$search}}"/>
                        @foreach($filters as $filter)
                            <div>
{{--                                <input wire:model="filter" name="filters[]" type="checkbox" id="{{$filter}}" value="{{ $filter }}" wire:change="updateFilters('{{ $filter }}')" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
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