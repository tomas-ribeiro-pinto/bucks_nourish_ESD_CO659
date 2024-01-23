<button x-show="tabSelected === {{$tab}}" x-on:click="tabSelected = {{$tab}}; console.log(tabSelected)" class="border-green-600 text-green-800 w-1/2 border-b-2 py-4 px-1 text-center text-sm font-bold">
    {{$slot}}
</button>
<button x-show="tabSelected !== {{$tab}}" x-on:click="tabSelected = {{$tab}}; console.log(tabSelected)" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 w-1/2 border-b-2 py-4 px-1 text-center text-sm font-medium">
    {{$slot}}
</button>