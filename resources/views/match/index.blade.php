@extends('layouts.template')

@section('contenido')
<div class="flex justify-end">
    <a href="{{ route('matchs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Create Match</a>
</div>
<h2 class="pb-6 text-5xl">Matchs</h2>
{{-- create a table with the following columns: --}}

<table class="border-collapse table-fixed w-full text-sm">
    <thead>
        <tr>
            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 pl-8 text-slate-400 dark:text-slate-200 text-left">
                Local Team</th>
            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 pl-8 text-slate-400 dark:text-slate-200 text-left">
                Goals</th>
            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 pl-8 text-slate-400 dark:text-slate-200 text-left">
                vs</th>
            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 pl-8 text-slate-400 dark:text-slate-200 text-left">
                Goals</th>
            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 pl-8 text-slate-400 dark:text-slate-200 text-left">
                Visitor Team</th>
            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 pl-8 text-slate-400 dark:text-slate-200 text-left">
                X</th>
        </tr>
    </thead>
    <tbody class="bg-white dark:bg-slate-800">
       
        @foreach($matchs as $match)
        <tr>
            <td class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                {{ $match->local_team }}</td>
            <td class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                {{ $match->goals_local_team}}</td>
            <td class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">vs
            </td>
            <td class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                {{ $match->goals_visitor_team}}</td>
            <td class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                {{ $match->visitor_team }}</td>
            <td class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                {{-- <form action="{{ route ('matchs.destroy', $match->id) }} " method="POST">
                    <a class="" href="matchs/{{ $match->id }}/edit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </a>
                    @csrf
                    @method('DELETE')
                    <button class="" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </form> --}}
            </td>

        </tr>
        @endforeach
    </tbody>
</table>


{{-- <div class="card m-3 p-3 border text-center border-blacklack-700 border max-w-max text-center"> --}}
    {{-- <div class="border border-gray-400 rounded-full h-48 w-48 flex-none bg-cover rounded-t  overflow-hidden"
            style="background-image: url('/images/teams/logo-club-06.png')" title="Image - {{ $match->name_team }}">
    <div class="text-right">
        <p class="w-4 pr-3 pl-1">

            {{ $match->id }}
        </p>
    </div>
</div> --}}
{{-- <div class="grid grid-cols-6 gap-4 w-max">
    <div class="text-gray-900 font-bold text-xl">Team Local: {{ $match->id_local_team_in_matchs }}</div>
    <div class="text-gray-900 font-bold text-xl">Goals: {{ $match->goals_local_team}}</div>
    <div class="text-gray-900 font-bold text-xl">VS.</div>

    <div class="text-gray-900 font-bold text-xl">Team Visitor: {{ $match->id_visitor_team_in_matchs }}</div>
    <div class="text-gray-900 font-bold text-xl">Golals: {{ $match->goals_visitor_team}}</div>
    <div class="text-gray-700 text-base relative">

    </div>
</div>
</div>
</div> --}}


@endsection
