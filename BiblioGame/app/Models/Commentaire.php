<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable =['texte_com'];

    public function jeu()
    {
        return $this->belongsTo(Jeu::class);
    }
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
