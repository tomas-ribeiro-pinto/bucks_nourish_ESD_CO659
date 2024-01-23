<div class="bg-gray-100 rounded-t-2xl">
    <div class="p-3 flex">
        <button @click="details = false"
                type="button"
                class="p-1 rounded-lg flex font-bold bg-gray-800 text-white hover:bg-gray-700 border border-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            Back to results
        </button>
        <span class="flex-1"></span>
        @if($foodbank['requires_volunteer'])
            <div class="mr-0 p-1 rounded-lg font-bold text-red-500 border border-red-400 float-right">
                <p>Volunteers needed!</p>
            </div>
        @endif
    </div>
    <div class="ml-6 pb-2">
        <h1 class="text-2xl font-bold">{{$foodbank['name']}}</h1>
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd" d="m9.69 18.933.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.273 1.765 11.842 11.842 0 0 0 .976.544l.062.029.018.008.006.003ZM10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" clip-rule="evenodd" />
            </svg>
            <p class="">{{$foodbank['address']}}</p>
        </div>
    </div>
</div>
<div x-data="{ tabSelected: 1}" class="row p-3 relative mb-3">
    <div>
        <div class="">
            <div class="border-b border-gray-200">
                <div class="-mb-px flex px-3" aria-label="Tabs">
                    <x-tab-link :tab="1">Items Needed</x-tab-link>
                    <x-tab-link :tab="2">Contacts & Info</x-tab-link>
                </div>
            </div>
        </div>
    </div>
    <div x-show="tabSelected === 1"
         style="display: none"
         class="mt-4">
        <div class="grid grid-cols-2">
            <div>
                <p class="text-center text-lg font-bold">Needs:</p>
                <ul class="list-disc list-outside ml-5 mt-2">
                    @foreach($needs ?: [] as $need)
                        <li>{{$need}}</li>
                    @endforeach
            </div>
            <p class="text-center text-lg font-bold">Urgent:</p>
        </div>
        @if($foodbank['requires_volunteer'])
            <div class="m-4 p-2 bg-red-800 rounded-lg text-white font-bold">
                <p>Volunteers needed!</p>
            </div>
        @endif
    </div>
    <div x-show="tabSelected === 2"
         style="display: none"
         class="mt-4">
        <div class="mb-2">
            <h1 class="font-bold text-xl text-green-800">Information:</h1>
            <p class="font-bold">Referral needed to collect: <span class="font-normal">{{$foodbank['requires_referral'] ? 'Yes' : 'No'}}</span></p>
            <p class="font-bold">Volunteers needed: <span class="font-normal">{{$foodbank['requires_volunteer'] ? 'Yes' : 'No'}}</span></p>
            <p class="font-bold">Opening hours: <span class="font-normal">{{$foodbank['opening_hours'] ?: 'Opening hours not found. Contact the food bank'}}</span></p>
            <p class="font-bold">Accessibility: <span class="font-normal">{{$foodbank['opening_hours'] ?: 'Accessibility information not found. Contact the food bank'}}</span></p>
        </div>
        <hr/>
        <div class="mt-2">
            <h1 class="font-bold text-xl text-green-800">Contacts:</h1>
            <p class="font-bold">Email: <span class="font-normal">{{$foodbank['email']}}</span></p>
            <p class="font-bold">Phone: <span class="font-normal">{{$foodbank['phone']}}</span></p>
            <p class="font-bold">Phone: <a href="{{$foodbank['website_url']}}" target="_blank" rel="noopener noreferrer" class="font-normal text-blue-600 hover:text-blue-400 underline">{{$foodbank['website_url']}}</a></p>
        </div>
    </div>
</div>