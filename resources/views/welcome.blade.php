@extends('layouts.template')

@section('contenido')

<body class="antialiased">
    <div class="pt-20 text-center">
        <a href="clubs" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-4">VIEW
            CLUBS
        </a>
        <a href="clubs/create"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-4">CREATE
            CLUB
        </a>
        <a href="teams" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-4">VIEW
            TEAMS
        </a>
        <a href="teams/create"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-4">CREATE
            TEAM
        </a>
    </div>
    <div class="counter">
        
    </div>
</body>

</html>
@endsection
