<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function jeus()
    {
        return $this->belongsToMany(Jeu::class);
    }
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function getId()
    {
    return $this->id;
    }

    public function getJeux(){
        $userID = DB::table('jeu_user')->select('jeu_id')->where('user_id',1); 
        $jeus = DB::table('jeus')->join('jeu_user', 'jeus.id', '=', 'jeu_user.jeu_id')->whereIn('jeus.id',$userID)->distinct()->get();
        //$jeus = DB::table('jeus')->join('jeu_user', 'jeus.id', '=', 'jeu_user.jeu_id')->whereIn('jeus.id',$userID){
        //    $query->select('jeu_user.jeu_id')
        //    ->where('user_id', 1);
        //})->get();
        return $jeus;
    }


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
