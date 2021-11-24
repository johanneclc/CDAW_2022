<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $table = 'playlists';
    protected $primaryKey = 'id_playlist';

    public function medias()
    {
        return $this->hasManyThrough(Media::class, PlaylistMedia::class,'id_playlist','id_media');
    }
}
