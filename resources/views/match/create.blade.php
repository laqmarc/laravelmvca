@extends('layouts.template')

@section('contenido')

<h2>Create Match</h2>
<form action="/matchs" method="POST">
    @csrf
    <div class="form">
        <p>Name of the local team:</p>
        <select name="id_local_team_in_matchs" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('team')}}">
            @foreach($teams as $team)
              <option value="{{$team->id}}">{{$team->name_team}}</option>
            @endforeach
        </select>        
        <p>Name of the visitor team:</p>
        <select name="id_visitor_team_in_matchs" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('team')}}">
            @foreach($teams as $team)
              <option value="{{$team->id}}">{{$team->name_team}}</option>
            @endforeach
        </select>
        {{-- <p>Local goals</p>
        <input type="number" name="local_goals" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('local_goals')}}">
        <p>Visitor goals</p>
        <input type="number" name="visitor_goals" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('visitor_goals')}}"> --}}

    </div>
    <a href="/matchs"  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-4">Cancel</a>
    <button type="submit"  class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">CREATE</button>

</form>


@endsection
