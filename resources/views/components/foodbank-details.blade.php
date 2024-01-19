<div class="bg-gray-100 rounded-t-2xl">
    <div class="pt-4 ml-6">
        <h1 class="text-2xl font-bold">{{$foodbank->name}}</h1>
        <p class="font-bold">{{$foodbank->address}}</p>
    </div>
</div>
<div class="row p-3 rounded-lg relative mb-3">
    <p>{{$foodbank->email}}</p>
    <p>{{$foodbank->phone}}</p>
    <p>Volunteers needed? {{$foodbank->require_volunteer}}</p>
</div>