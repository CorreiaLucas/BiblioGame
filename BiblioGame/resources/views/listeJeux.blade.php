<section class='row'>
@foreach($jeus as $jeu)
    <body>
    <div class='col-md-2 col-sm-4 col xs-6'>
        <div class='thumbnail bg-dark text-white'>
            <h1>{{$jeu->id}} </h1>
            <h1>{{$jeu->titre}}</h1>
        </div>
    </div>
@endforeach