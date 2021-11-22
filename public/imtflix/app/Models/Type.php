<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function getMediasOfTypes(){
        return $this->belongsTo(Media::class,'id_type','id_type');
    }
}
