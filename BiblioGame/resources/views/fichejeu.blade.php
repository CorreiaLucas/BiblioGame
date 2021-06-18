@extends('layout')

@section('titrePage')
    Information sur le Jeu
@endsection
@section('titreItem')
    <h1>  {{ $jeu->titre }} </h1>
@endsection

@section('contenu')
    <div class="card mb-3" >
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset('images/'.$jeu->image)}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    
                    <h3 class="card-title">Editeur: {{ $jeu->entreprise->lib_entreprise}}</h3>
                    @foreach($jeu->genres as $genre)
                        <span class="badge badge-secondary">{{ $genre->lib_genre}}</span>
                        
                    @endforeach
                    <p class="card-text"> {{ $jeu->synopsis}}</p>
                     
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                    @auth
                    <form action="{{ url('jeuuserformulaire', $jeu->id)}}" method="POST">
                        @csrf
                        <button type="submit" name="1"  id="1" value="Ajouter" class="btn btn-success"> Ajouter à ma liste</button>  
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="headings d-flex justify-content-between align-items-center mb-3">
                <h5>Comments</h5>
            </div>
            @foreach($jeu->commentaires as $com)
                <div class="card p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="user d-flex flex-row align-items-center">  <span><small class="font-weight-bold text-primary">{{$com->user->name}}</small> <small class="font-weight-bold">{{$com->texte_com}}</small></span> </div> 
                    </div>
                </div>
            @endforeach
            @auth
                <form action="{{url('addcomment', $jeu->id) }}" method="POST">
                <br>
                    <div class="form-group">
                        @csrf
                        <input type="text" class="form-control @error('texte_com') is-invalid @enderror" name="texte_com" id="texte_com" placeholder="Votre commentaire ici">
                        @error('texte_com')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-secondary">Commenter</button>
                </form>
            @endauth
        </div>
    </div>
</div>
@endsection