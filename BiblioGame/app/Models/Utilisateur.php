<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable =['nom_utilisateur','pseudo_utilisateur'];

    public function jeus()
    {
        return $this->belongsToMany(Jeu::class);
    }
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
    
}
