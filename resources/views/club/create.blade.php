@extends('layouts.template')

@section('contenido')

<h2>Create club</h2>
<form action="/clubs" method="POST">
    @csrf
    <div class="form">
        <p>Name of the club:</p>
        <input type="text" name="name" id="name" placeholder="Club name" tabindex="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <a href="/clubs" tabindex="2" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-4">Cancel</a>
    <button type="submit" tabindex="3" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">CREATE</button>


</form>


@endsection
