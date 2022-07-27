<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DACLUB</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>

<body class="antialiased">

    <div class="relative">
        <a href="/">
            <h1 class="text-center text-3xl  absolute top-0 left-0">DACLUB</h1>
        </a>
    </div>
    <div class="pt-10 text-center">
        <div class="grid grid-cols-3">

            <button class="button butoquesmou button--border-thick" data-text="open">
                <div class="grid grid-cols-2 spaceinside">
                    <a href="/clubs"><span>See Clubs</span></a>
                    <a href="/clubs/create"><span>Create Club</span></a>
            </button>
            <button class="button t butoquesmou button--border-thick" data-text="open">
                <div class="grid grid-cols-2 spaceinside">
                    <a href="/teams"><span>See Teams</span></a>
                    <a href="/teams/create"><span>Create Teams</span></a>
                </div>
            </button>
            <button class="button m butoquesmou button--border-thick" data-text="open">
                <div class="grid grid-cols-2 spaceinside">
                    <a href="/matchs"><span>See Matchs</span></a>
                    <a href="/matchs/create"><span>Create Matchs</span></a>
                </div>
            </button>
        </div>
    </div>

    <div class="container m-auto">
        @yield('contenido')
    </div>
</body>

</html>
