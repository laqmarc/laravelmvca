<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DACLUB</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>

<body class="antialiased">

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/clubs">Clubs</a>
        <a href="/clubs/create">Create Clubs</a>
        <hr>
        <a href="/teams">Teams</a>
        <a href="/teams/create">Create Teams</a>
        <hr>
        <a href="/matchs">Matchs</a>
        <a href="/matchs/create">Create Matchs</a>

    </div>

    <!--sidenav-->
    <span class="frontbutton" onclick="openNav()">
        <svg class="inline-svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="22px" viewBox="0 0 32 22.5"
            enable-background="new 0 0 32 22.5" xml:space="preserve">
            <title>DACLUB MENU</title>
            <g class="svg-menu-toggle">

                <path class="bar" d="M20.945,8.75c0,0.69-0.5,1.25-1.117,1.25H3.141c-0.617,0-1.118-0.56-1.118-1.25l0,0
                           c0-0.69,0.5-1.25,1.118-1.25h16.688C20.445,7.5,20.945,8.06,20.945,8.75L20.945,8.75z">
                </path>
                <path class="bar"
                    d="M20.923,15c0,0.689-0.501,1.25-1.118,1.25H3.118C2.5,16.25,2,15.689,2,15l0,0c0-0.689,0.5-1.25,1.118-1.25 h16.687C20.422,13.75,20.923,14.311,20.923,15L20.923,15z">
                </path>
                <path class="bar" d="M20.969,21.25c0,0.689-0.5,1.25-1.117,1.25H3.164c-0.617,0-1.118-0.561-1.118-1.25l0,0
                           c0-0.689,0.5-1.25,1.118-1.25h16.688C20.469,20,20.969,20.561,20.969,21.25L20.969,21.25z">
                </path>

                <rect width="32" height="22" fill="none">

                </rect>
            </g>
        </svg>
    </span>

    <div class="hrader">
        <a href="/">
            <h1 class="tittt">DACLUB</h1>
        </a>
    </div>

    <div id="main">
        <div class="container m-auto">
            @yield('contenido')
        </div>
    </div>

</body>
<script src="/js/script.js"></script>

</html>
