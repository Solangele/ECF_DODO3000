@extends('layouts.app')


@section('content')

<div class="flex flex-col bg-slate-500 w-1/2 m-auto mt-24 h-48">
    <div class="pt-6 m-auto">
        <h1 class="text-white">Connectez-vous</h1>
    </div>
    <div class="pt-6 m-auto">
        <label for="mail" class="text-white pt-6">Identifiant : </label>
        <input type="mail" name="id" id="mail">
        @error('email')
            <p> {{$message}} </p>
        @enderror
    </div>

    <div class="m-auto">
        <button class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Entrer</button>
    </div>

    <a href="/matelas">Aller aux catalogues</a>
        
        
    
</div>

@endsection