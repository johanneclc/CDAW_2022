<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'medias';
    protected $primaryKey = 'id_media';

    protected $guarded = [
        'created_at','update_at'
    ];
    public function categories()
    {
        return $this->hasManyThrough(Categorie::class, CategorieMedia::class,'id_media','id_categorie');
    }

    public function type(){
        return $this->hasOne(Type::class,'id_type','id_type');
    }
}
