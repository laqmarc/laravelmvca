@extends('layouts.template')

@section('contenido')

<h2 class="pb-6 text-5xl">Teams</h2>
<a href="teams/create" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-4">CREATE
    TEAM</a>
<a href="clubs/create" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-4">CREATE
    CLUB</a>

</div>
<div class="grid grid-cols-2 md:grid-cols-3">
    @foreach($teams as $team)
    <div class="card m-3 p-3 border-black-700 border max-w-max text-center" style="max-width: 220px;">
        <div class="border border-gray-400 rounded-full h-48 w-48 flex-none bg-cover rounded-t  overflow-hidden"
            style="background-image: url('/images/teams/logo-club-06.png')" title="Image - {{ $team->name_team }}">
            <div class="text-right">
                <p class="w-4 pr-3 pl-1">

                    {{ $team->id }}
                </p>
            </div>
        </div>
        <div class="text-gray-900 font-bold text-xl mb-16 mt-8">Team: {{ $team->name_team }}</div>
            <div class="text-gray-900 font-bold text-xl mb-16 mt-8">Club: {{ $team->name_club}}</div>
            
            <div class="text-gray-700 text-base relative">
            <form action="{{ route ('teams.destroy', $team->id) }} " method="POST">
                    <a class="py-2 px-4 rounded absolute left-0 bottom-0" href="teams/{{ $team->id }}/edit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </a>
                    @csrf
                    @method('DELETE')
                    <button class="py-2 px-4 rounded absolute right-0 bottom-0" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
            </form>
        </div>
    </div> 
    @endforeach
</div>


@endsection
