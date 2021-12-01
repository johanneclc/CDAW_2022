<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Playlist extends Model
{
    use HasFactory;

    protected $table = 'playlists';
    protected $primaryKey = 'id_playlist';

    public function medias()
    {
        return $this->hasManyThrough(Media::class, PlaylistMedia::class,'id_playlist','id_media');
    }

    public function abonnements()
    {
        return $this->hasManyThrough(User::class, Abonnement::class,'id_playlist','id')
            ->where('abonnements.id_utilisateur',Auth::user()->id);
    }

    static function communaute(){
        return Playlist::leftJoin('abonnements','abonnements.id_playlist','=','playlists.id_playlist')
                            ->where('playlists.id_utilisateur','!=',Auth::user()->id)
                            ->where(function($query) {
                                $query->where('abonnements.id_utilisateur','!=',Auth::user()->id)
                                      ->orWhereNull('abonnements.id_utilisateur');

                            })
                            ->get();
    }

    static function creations(){
        return DB::table('playlists')->where('id_utilisateur',Auth::user()->id)->get();
    }
}
