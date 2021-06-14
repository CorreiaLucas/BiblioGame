<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeu = new Jeu();
        $jeus = $jeu->getAll();
        $jeu->with('genres')->get();
        return view('listeJeux',compact('jeus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function attach(Jeu $jeu,User $user ){
        $idJeu = $jeu->id;
        $idUser=$user->id;

        $jeu->user->attach($idUser);    
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Jeu $jeu,User $user)
    {
        $idJeu = $jeu->id;
        $idUser=$user->getId;
        print_r($idJeu,$idUser);
        $user->jeus->attach($idJeu);
        return view('index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jeu  $jeu
     * @return \Illuminate\Http\Response
     */
    public function show(Jeu $jeu)
    {
        $entreprise-> jeu->entreprise;
        $jeu->with('genres')->get();
        return view('fichejeu', compact('jeu, entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jeu  $jeu
     * @return \Illuminate\Http\Response
     */
    public function edit(Jeu $jeu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jeu  $jeu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jeu $jeu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jeu  $jeu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jeu $jeu)
    {
        //
    }
}
