<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieMedia extends Model
{
    use HasFactory;

    public function films(){
        return $this->belongsTo(Media::class, foreignKey: 'id_media' , ownerKey:'id_media')
                    ->belongsTo(Categorie::class, foreignKey: 'id_categorie' , ownerKey:'id_categorie');
    }
}
