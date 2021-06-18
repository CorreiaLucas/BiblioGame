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

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }
    public function getID(Request $request, Jeu $jeu)
    {      
        
       

        jeus()->show($jeuID);
        return view('ajoutJeu');
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jeu  $jeu
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Jeu $jeu)
    {   
        $jeuID= $request->id;
        
        $jeu= Jeu::find($jeuID);
        
       
        return view('fichejeu', compact('jeu'));
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
