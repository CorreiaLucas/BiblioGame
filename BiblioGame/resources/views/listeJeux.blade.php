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
            <div class="card" >
                <img  class="card-img-top" src = "{{asset('images/'.$jeu->image)}}">
                <div class="card-body">
                    <h5 class="card-title">{{$jeu->titre}}</h5>
                    <a href="{{ route('jeux.show', $jeu->id)}}" class="btn btn-primary">Voir</a>
                    @auth
                        <a href="{{ route('jeux.show', $jeu->id)}}" class="btn btn-primary">Voir</a>
                    @endauth
                </div>
                <h3></h3>
            </div>
        </div>
    @endforeach
</section>
@endsection

