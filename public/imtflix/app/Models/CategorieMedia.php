<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieMedia extends Model
{
    use HasFactory;

    protected $table = 'categories_media';
    protected $primaryKey = "id_categorie_media";

    protected $guarded = [
        'created_at','update_at'
    ];

    // public function films(){
    //     return $this->belongsTo(Media::class, foreignKey: 'id_media' , ownerKey:'id_media')
    //                 ->belongsTo(Categorie::class, foreignKey: 'id_categorie' , ownerKey:'id_categorie');
    // }
}
