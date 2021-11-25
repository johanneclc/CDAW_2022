<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePersonne extends Model
{
    use HasFactory;

    protected $table = 'roles_personne';
    protected $primaryKey = 'id_role_personne';
}
