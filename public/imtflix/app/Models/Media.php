<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'medias';

    protected $guarded = [
        'created_at','update_at'
    ];
    public function getCategoriesOfMedias()
    {
        return $this->hasMany(Categorie::class);
    }

    public function getTypeOfMedia(){
        return $this->hasOne(Type::class);
    }
}
