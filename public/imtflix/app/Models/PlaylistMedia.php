<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistMedia extends Model
{
    use HasFactory;

    protected $table = 'playlists_media';
    protected $primaryKey = 'id_playlist_media';
}
