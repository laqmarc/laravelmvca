@extends('layouts.template')

@section('contenido')
<div class="flex justify-end">
    <a href="{{ route('matchs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Create Match</a>
</div>
<h2 class="pb-6 text-5xl">Matchs</h2>
<table class="border-collapse table-fixed w-full text-sm">
    <thead>
        <tr>
            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-center">
                Local Team</th>

            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-center">
                Points</th>
                <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-center">
                Goals</th>
            <th
                class="border text-center border-black dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-center bg-red-300">
                vs</th>
            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-center">
                Goals</th>
            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-center">
                Points</th>
            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-center">
                Visitor Team</th>
            <th
                class="border text-center bg-white border-black dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-center">
                X</th>
        </tr>
    </thead>
    <tbody class="bg-white dark:bg-slate-800">

        @foreach($matchs as $match)
        <tr>
            <td
                class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                {{ $match->local_team }}
            </td>
            
            <td
                class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                {{ $match->points_local_team }}
            </td>
            <td
                class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                {{ $match->goals_local_team }}
            </td>
            <td
                class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 bg-red-300">
                vs
            </td>
            <td
                class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                {{ $match->goals_visitor_team}}
            </td>
            <td
                class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                {{ $match->points_visitor_team}}
            </td>
            <td
                class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                {{ $match->visitor_team }}
            </td>
            <td
                class="border text-center border-black border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                {{-- <form action="{{ route ('matchs.destroy', $match->id) }} " method="POST">
                <a class="py-2 px-4 rounded absolute left-0 bottom-0" href="matchs/{{ $match->id }}/edit">
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

@endsection
