<x-edit-modal :width="null">
    <x-slot name="slot">
        <p class="text-sm"><span class="text-red-500 sups">*</span> Required Field</p>
        <h1 class="mt-4 font-bold text-2xl">Organization Contacts</h1>
        <hr/>
        <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <input type="hidden" name="id" value="{{$organization->id}}"/>
            <div class="sm:col-span-full">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email<span class="text-red-500 sups">*</span></label>
                <div class="mt-2">
                    <input type="email" value="{{$organization->email}}" name="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required/>
                </div>
                @error('email')
                <div class="error text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="sm:col-span-full">
                <label for="website_url" class="block text-sm font-medium leading-6 text-gray-900">Website URL<span class="text-red-500 sups">*</span></label>
                <div class="mt-2">
                    <input type="text" value="{{$organization->website_url}}" name="website_url" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required/>
                </div>
                @error('website_url')
                <div class="error text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="sm:col-span-full">
                <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number<span class="text-red-500 sups">*</span></label>
                <div class="mt-2">
                    <input type="text" value="{{$organization->phone}}" name="phone" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required/>
                </div>
                @error('website_url')
                <div class="error text-sm text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

        </div>
    </x-slot>
</x-edit-modal>