<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;
use App\Models\User;


class UserController extends Controller
{

    public function index()
    {
        $user = new User();
        $jeus = $user->getJeux();
        return view('listeJeux',compact('jeus'));
    }
    
}
