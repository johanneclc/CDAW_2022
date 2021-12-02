<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
