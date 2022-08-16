@extends('layouts.template')

@section('contenido')
<div class="md-container">
    <div class="text-center">
        <h2 class="pt-8 text-3xl">Edit team</h2>
    </div>
    <div class="p-8 bg-red-100">
        <form action="/teams/{{ $team->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form">
                <p>Name of the team:</p>

                <input type="text" name="name_team" id="name_team" tabindex="1" value="{{ $team->name_team }} @selected(old('team') == $team)"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <p>Select the Club:</p>

                <select name="id_club_in_teams" id="id_club_in_teams"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{($team->id_club_in_teams)}}">
                    @foreach($clubs as $club)
                    <option value="{{$club->id}}" @selected(old('club') == $club) >{{$club->name_club}}</option>
                    @endforeach
                </select>
            </div>
            <div class="pt-4">
                <a href="/teams" tabindex="2"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-4">CANCEL</a>
                <button type="submit" tabindex="3"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">EDIT</button>
            </div>
        </form>
    </div>
</div>
@endsection
