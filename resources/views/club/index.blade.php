@extends('layouts.template')

@section('contenido')

<div class="fixed right-0 top-2">
    <a href="{{ route('clubs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Create Club</a>
</div>

<div class="grid sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 m-auto justify-center">
    @foreach($clubs as $club)
    <div class="card bg-white m-3 p-3 border-black-700 border max-w-max text-center self-auto" style="max-width: 220px;">
        {{-- NICE --}}
        <div class="border border-gray-400 rounded-full h-48 w-48 flex-none bg-cover rounded-t  overflow-hidden"
            style="background-image: url('/images/clubs/logo-club-05.png')" title="Image - {{ $club->name_club }}">
            <div class="text-right">
                <p class="w-4 pr-3 pl-1">

                    {{ $club->id }}
                </p>
            </div>
        </div>
        {{-- END NICE --}}
        <div class="text-gray-900 font-bold text-xl mb-16 mt-8">{{ $club->name_club }}</div>
        <div class="text-gray-700 text-base relative">
            <form action="{{ route ('clubs.destroy', $club->id) }} " method="POST">
                    <a class="py-2 px-4 rounded absolute left-0 bottom-0" href="clubs/{{ $club->id }}/edit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </a>
                    @csrf
                    @method('delete')
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
@endsection
