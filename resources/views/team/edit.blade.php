@extends('layouts.template')

@section('contenido')

<h2>Edit team</h2>
<form action="/teams/{{ $team->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form">
        <p>Name of the team:</p>

        <input type="text" name="name_team" id="name_team" tabindex="1" value="{{ $team->name_team }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <p>Select the Club:</p>

        <select name="id_club_in_teams" id="id_club_in_teams" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{($team->id_club_in_teams)}}">
            @foreach($clubs as $club)
              <option value="{{$club->id}}">{{$club->name_club}}</option>
            @endforeach
        </select>
    </div>
    <a href="/teams" tabindex="2" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-4">CANCEL</a>
    <button type="submit" tabindex="3" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">EDIT</button>
</form>


@endsection
