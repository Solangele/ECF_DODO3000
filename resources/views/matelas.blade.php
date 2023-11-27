@extends('layouts.app')

@section('content')
<div class="bg-amber-100">
    <a href="/matelas" class="px-4 py-2 text-sm bg-green-500 hover:bg-blue-300 duration-200 rounded-full shadow-sm m-auto">Retour aux Matelas</a>
    {{-- <a href="/pulls/{{$pulls->id}}/supprimer" class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm m-auto">Supprimer le pull</a> --}}
    <div class="mx-3 my-3 flex justify-between gap-2">
        <a href="/matelas/{{$dodos->id}}/modifier " class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm m-auto">Modifier</a>
        <a href="/pulls/{{$dodos->id}}/supprimer" onclick='return confirm("Etes-vous sûr de vouloir supprimer le film {{$dodos->name}} ?")' class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm m-auto">Supprimer</a>
    </div>
    <div class="flex gap-10 items-center">
        <div class="w-2/5">
            <img class="w-full mt-8" src="{{ $dodos->image }}" alt="{{ $dodos->image }}">
        </div>
        <div class="w-3/5">
            <div class="border p-4 shadow-lg">
                <h1 class="text-3xl">{{ $dodos->name }}</h1>
                <p class="my-3">{{ $dodos->size }}</p>
                <p class="my-3">{{ $dodos->color }}</p>
                <p class="my-3">{{ $dodos->price }} euros</p>
                <p class="my-3">{{ $dodos->description }}</p>
            </div>        
        </div>
    </div>
</div>
@endsection