@extends('layouts.app')

@section('content')
<div class="bg-amber-100">
<div class = flex>
    <div class="flex-column gap-10 mb-6 m-auto">
        <h1 class="text-3xl text-center mb-4">Catalogue</h1>
        <a href="/matelas/creer" class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm m-auto">Enregistrer un matelas</a>
    </div>
</div>

<div class = "flex flex-wrap">
    @foreach ($dodos as $dodo)
    <div class = "flex w-1/2 md:w-1/2 lg:w-1/2">
        <div class ="flex flex-col justify-between h-full">
                <a href="/matelas/{{ $dodo->id }}" class="block mx-3 group">
                <img class="w-full h-[450px] object-cover" src="{{ $dodo->image }}" alt="{{ $dodo->brand }}">
                <h3 class="text-center text-sm text-gray-600 underline group-hover:no-underline">{{ $dodo->brand }}</h3>
                <h3 class="text-center text-sm text-gray-600 underline group-hover:no-underline">{{ $dodo->size }}</h3>
                </a>                
        </div>
        <a href="/matelas/{{$dodo->id}}/supprimer" onclick='return confirm("Etes-vous sûr de vouloir supprimer le matelas {{$dodo->brand}} ?")' class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm m-auto">🗑</a>
        
    </div>
        
    @endforeach

</div>

</div>   
@endsection