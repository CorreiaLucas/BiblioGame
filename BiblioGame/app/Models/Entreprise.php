<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable =['lib_entreprise','site_web','adresse'];

    public function jeus()
    {
        return $this->hasMany(Jeu::class);
    }
    
}
