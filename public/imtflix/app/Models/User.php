<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'chemin_avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->hasOne(RoleUtilisateur::class,'id_role_utilisateur','id_role_utilisateur');
    }

    function abonnements(){
        return $this->hasManyThrough(Playlist::class, Abonnement::class,'id_utilisateur','id_playlist');
    }

    static function user_role(){
        if(!Auth::check()){
            return ['role'=> 0, 'name'=>null,'user'=>null] ;
        }
        elseif (Auth::user()->id_role_utilisateur==1) {
            return ['role'=>1, 'name'=>Auth::user()->name,'user'=>Auth::user()] ;
        }
        elseif (Auth::user()->id_role_utilisateur==2) {
            return ['role'=>2, 'name'=>Auth::user()->name,'user'=>Auth::user()] ;
        }
        elseif (Auth::user()->id_role_utilisateur==2) {
            return ['role'=>3, 'name'=>Auth::user()->name,'user'=>Auth::user()] ;
        }
        return ['role'=>4, 'name'=>Auth::user()->name,'user'=>Auth::user()] ; 
    }

}
