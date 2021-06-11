@extends('layout')

@section('titrePage')
    Liste des jeux
@endsection

@section('titreItem')
    <h1> tous les jeux : </h1>
@endsection

@section('contenu')
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
</section>
@endsection