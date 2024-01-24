<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if(Auth::user()->hasRole('superadmin'))
                    <div class="p-6 text-gray-900">
                        {{ __("Welcome Super Admin!") }}
                    </div>
                @else
                    <div class="p-6 text-gray-900">
                        {{ __("Welcome Admin!") }}
                    </div>
                @endif
            @if(Auth::user()->organization != null)
            </div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="p-4 mb-2 grid grid-cols-1 md:grid-cols-3 justify-center items-center">
                        <div x-data='{ show: false }'>
                            <a @click="show = true" type="button"
                               class="col flex justify-center items-center bg-green-700 rounded-xl h-56 p-4 m-4 hover:cursor-pointer">
                                <div class="flex-col">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto text-white mb-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    <p class="text-2xl font-bold text-white">My Organisation</p>
                                </div>
                            </a>
                            <x-edit-organization :organization="Auth()->user()->organization"/>
                        </div>
                        <a href="{{route('foodbanks')}}"
                           class="col flex justify-center items-center bg-green-700 rounded-xl h-56 p-4 m-4">
                            <div class="flex-col">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto text-white mb-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                                <p class="text-2xl font-bold text-white">My Locations</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>

    </div>
</x-app-layout>
