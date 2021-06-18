@extends('layout')

@section('titrePage')
    Information sur le Jeu
@endsection

@section('contenu')
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset('images/'.$jeu->image)}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Titre : {{ $jeu->titre }}</h5>
                    <p class="card-text">Entreprise : {{ $jeu->entreprise->lib_entreprise}}</p>
                    <ul>
                        @foreach($jeu->genres as $genre)
                            <li>{{ $genre->lib_genre}}</li>
                        @endforeach
                    </ul>
                    <ul>
                        @foreach($jeu->commentaires as $com)
                            <li>{{ $com->texte_com}}</li>
                        @endforeach
                    </ul>
                    @auth
                    <form action="{{ url('jeuuserformulaire', $jeu->id)}}" method="POST">
                        @csrf
                        <button type="submit" name="1"  id="1" value="Ajouter" class="btn btn-primary"> Ajouter</button>  
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection