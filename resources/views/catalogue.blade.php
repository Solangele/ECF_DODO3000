@extends('layouts.app')

@section('content')
<div class="">
<div class = flex>
    <div class="flex-column gap-10 mb-6 m-auto">
        <h1 class="text-3xl text-center mt-6 mb-4">Catalogue</h1>
        <a href="/matelas/creer" class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm m-auto">Enregistrer un matelas</a>
    </div>
</div>

<div class = "flex flex-col w-1/2 m-auto mb-6">
    @foreach ($dodos as $dodo)
    <div class = "flex bg-sky-300 rounded-md items-center">
        <div class =" flex">
                <a href="/matelas/{{ $dodo->id }}" class="block mx-3 group">
                    <div>
                        <img class="max-w-md max-h-md object-cover" src="{{ $dodo->image }}" alt="{{ $dodo->brand }}">
                    </div>
                    <div>
                        <h3 class="text-center text-sm text-gray-600 underline group-hover:no-underline">{{ $dodo->brand }}</h3>
                <h3 class="text-center text-sm text-gray-600 underline group-hover:no-underline">{{ $dodo->size }}</h3>
                    </div>
                
                </a>
                <a href="/matelas/{{$dodo->id}}/supprimer" onclick='return confirm("Etes-vous sûr de vouloir supprimer le matelas {{$dodo->brand}} ?")' class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm m-auto">🗑</a>                
        </div>
        
        
    </div>
        
    @endforeach

</div>

</div>   
@endsection