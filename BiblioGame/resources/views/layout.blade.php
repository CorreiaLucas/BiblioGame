<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8">
        <link href = "{{asset('/css/mangas.css')}}" rel ="stylesheet">
        <link href = "{{asset('lib/bootstrap/bootstrap.min.css')}}" rel ="stylesheet">
        <title>
            @yield('titrePage')
        </title>
    </head>

    <body>

        <header>
            @yield('titreItem')
        </header>
        
        @yield('contenu')

        <footer class ="footer">
            BiblioGame - copyright 3AInfo - 2021
        </footer>
        <script type='text/javascript' src="{{asset('/lib/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>
