<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('tituloPagina')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

    </head>
    <body>

        <div class="content">
            <div class="title m-b-md">
                Laverel - @yield('tituloPagina')
            </div>

            <div class="links">
                <a href="/cartelera">Cartelera</a>
                <a href="/españa">Cine Español</a>
                <a href="/busqueda">Búsqueda</a>
                <a href="/popular">Popular</a>
                <a href="/favoritos">Favoritos</a>
                <a target="blank" href="https://www.themoviedb.org/">TMDB</a>
            </div>
        </div>

        <div class="cuerpo" style="margin:50px;color:black">
            @yield('cuerpo')
        </div>

        <footer class="footer">
            <div class="container">
                <span class="text-muted">Carlos Saboya Ocaña &copy;</span>
            </div>
        </footer>
            
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

