@extends('layouts.app')

@section('content')
<div class="mt-12">
    <a href="/matelas" class="px-4 py-2 text-sm bg-green-500 hover:bg-blue-300 duration-200 rounded-full shadow-sm m-auto">Retour aux matelas</a>
</div>

    <h1 class="text-3xl mb-3">Ajouter un matelas</h1>

    @foreach ($errors->all() as $error)
        <p class="text-red-500">{{ $error }}</p>
    @endforeach

    <form action="" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="block">Marque</label>
            <select name="" id="">
                <option value="">--Marque du matelas--</option>
                <option value=""> Epeda </option>
                <option value=""> Dreamway </option>
                <option value=""> Bultex </option>
                <option value=""> Dorsoline </option>
                <option value=""> MemoryLine </option>
                </select>
            @error('brand')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="size" class="block">Taille</label>
            <select name="" id="">
            <option value="">--Taille du matelas--</option>
            <option value=""> 90 x 190 </option>
            <option value=""> 140 x 190 </option>
            <option value=""> 160 x 200 </option>
            <option value=""> 180 x 200 </option>
            <option value=""> 200 x 200 </option>
            </select>
            @error('size')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="block">Prix</label>
            <input type="text" name="price" id="price" value="{{ old('price') }}" class="rounded shadow border-gray-300 w-full">
            @error('price')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="reduction" class="block">Reduction</label>
            <input type="text" name="reduction" id="reduction" value="{{ old('reduction') }}" class="rounded shadow border-gray-300 w-full">
            @error('reduction')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="description">Image</label>
            <textarea name="image" id="image" class="rounded shadow border-gray-300 w-full">{{ old('image') }}</textarea>
            @error('image')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        

        <button class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Ajouter</button>
    </form>
@endsection