<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaime extends Model
{
    protected $table = "jaime";

    use HasFactory;
    protected $fillable = ['user_id', 'id_media'];
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function movie() {
        return $this->belongsTo(Media::class);
    }
}
