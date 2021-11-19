<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function getFilmsCategories(){
        return $this->belongsTo(related: Category::class, foreignKey: 'category_id' , ownerKey:'id');
    }
}
