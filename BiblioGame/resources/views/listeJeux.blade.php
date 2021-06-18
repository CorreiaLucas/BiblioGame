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
        <div class='col-md-2 col-sm-4 col xs-6'>
            <div class="card-group" >
                <img  class="card-img-top" src = "{{asset('images/'.$jeu->image)}}">
                <div class="card-body">
                    <h5 class="card-title">{{$jeu->titre}}</h5>
                    <form action="{{ url('fiche', $jeu->id)}}" method="POST">
                        @csrf
                        <button type="submit" name="1"  id="1" value="voir" class="btn btn-info"> Voir</button>  
                    </form>
                    <hr>
                    @auth
                    <form action="{{ url('jeuuserformulaire', $jeu->id)}}" method="POST">
                        @csrf
                        <button type="submit" name="1"  id="1" value="Ajouter" class="btn btn-success btn-sm"> Ajouter à ma liste</button>  
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    @endforeach
</section>
@endsection

