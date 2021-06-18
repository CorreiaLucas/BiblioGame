@extends('layout')

@section('titrePage')
    profil
@endsection

@section('titreItem')
    <h1> Votre liste de jeux :  </h1>
@endsection

@section('contenu')
<section class='row'>
<div class='col-md-3 col-sm-5 col xs-7'>
    <h2> Utilisateur : {{Auth::user()->name}} </h2>
    <h3> mail : {{Auth::user()->email}} </h3>
    <h3> créé le : {{Auth::user()->created_at}} </h3>

</div>
    @foreach($jeus as $jeu)
        <div class='col-md-2 col-sm-4 col xs-6'>
            <div class="card" >
                <img  class="card-img-top" src = "{{asset('images/'.$jeu->image)}}">
                <div class="card-body">
                    <h5 class="card-title">{{$jeu->titre}}</h5>
                    <form action="{{ url('fiche', $jeu->id)}}" method="POST">
                        @csrf
                        <button type="submit" name="1"  id="1" value="voir" class="btn btn-primary"> Voir</button>  
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</section>
@endsection

