<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable =['synopsis','titre'];

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }
    public function utilisateurs(){
        return $this->belongsToMany(Utilisateur::class);
    }
    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
}
