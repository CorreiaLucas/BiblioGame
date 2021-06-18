<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Jeu extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable =['synopsis','titre', 'image'];

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
    
    //list of jeux
    public function getAll(){
        $jeus = DB::table('jeus')->get();
        return $jeus;
    }
    
}

