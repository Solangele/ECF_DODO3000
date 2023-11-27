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
            <input type="text" name="brand" id="brand" value="{{ old('brand') }}" class="rounded shadow border-gray-300 w-full">
            @error('brand')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="size" class="block">Taille</label>
            <input type="text" name="size" id="size" value="{{ old('size') }}" class="rounded shadow border-gray-300 w-full">
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
            <input type="text" name="reduction" id="price" value="{{ old('reduction') }}" class="rounded shadow border-gray-300 w-full">
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