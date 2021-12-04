<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Media extends Model
{
    use HasFactory;

    protected $table = 'medias';
    protected $primaryKey = 'id_media';
    protected $fillable = ['rating_star'];

    protected $guarded = [
        'created_at','update_at','rating_star'
    ];
    public function categories()
    {
        return $this->hasManyThrough(Categorie::class, CategorieMedia::class,'id_media','id_categorie');
    }

    public function type(){
        return $this->hasOne(Type::class,'id_type','id_type');
    }

    public function acteurs()
    {
        return $this->hasManyThrough(Personne::class, PersonneMedia::class,'id_media','id_personne');
    }
    public function comments() {
        return $this->hasMany(Comment::class,'id_media');
    }

    static function medias_recents(){
        return DB::table('medias')->orderBy('annee','desc')->take(6)->get();
    }

    static function medias_populaires(){
        return DB::table('medias')
            ->select(DB::raw('medias.*, count(jaime.id_media) as count'))
            ->join('jaime','jaime.id_media','medias.id_media')
            ->groupBy('medias.id_media')
            ->take(6)
            ->get();
    }

    static function count_jaime(Media $media){
        return DB::table('jaime')->where('id_media',$media->id_media)->count();
    }
}
