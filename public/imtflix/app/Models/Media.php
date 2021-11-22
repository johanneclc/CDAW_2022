<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'detail', 'annee', 'categorie', 'category_id'
    ];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
