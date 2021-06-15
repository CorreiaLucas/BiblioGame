@extends('layout')

@section('titrePage')
    Liste des jeux
@endsection

@section('titreItem')
    <h1> tous les jeux : </h1>
@endsection

@section('contenu')
<section class='row'>
    @foreach($jeux as $jeu)
        <div class='col-md-2 col-sm-4 col xs-6'>
            <div class="card" >
                <img  class="card-img-top" src = "{{asset('images/'.$jeu->image)}}">
                <div class="card-body">
                    <h5 class="card-title">{{$jeu->titre}}</h5>
                    <a href="{{ route('jeux.show', $jeu->id)}}" class="btn btn-primary">Voir</a>
                    @auth
                    <form action="{{ url('jeuuserformulaire', $jeu->id)}}" method="POST">
                        @csrf
                        <button type="submit" name="1"  id="1" value="Ajouter" class="btn btn-primary"> Ajouter</button>  
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    @endforeach
</section>
@endsection

