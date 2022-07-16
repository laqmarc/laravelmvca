@extends('layouts.template')

@section('contenido')

<h2>Edit club</h2>
<form action="/clubs/{{ $club->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form">
        <input type="text" name="name_club" id="name_club" tabindex="1" value="{{ $club->name_club }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    </div>
    <a href="/clubs" tabindex="2"      class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-4">CANCEL</a>
    <button type="submit" tabindex="3" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">EDIT</button>


</form>
@endsection 
