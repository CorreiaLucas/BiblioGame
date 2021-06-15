<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;

class JeuUserFormController extends Controller
{
    public function attach(Request $request, Jeu $jeu)
    {      
        $user = auth()->user();
        $jeuID= $request->id;

        auth()->user()->jeus()->attach($jeuID);
        return view('ajoutJeu');
        return 'jeu ajouté pour l user : ' . $user->id . ' avec le jeu: ' . $jeuID;
    }
}
