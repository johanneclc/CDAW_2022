<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUtilisateur extends Model
{
    use HasFactory;

    protected $table = 'roles_utilisateur';
    protected $primaryKey = 'id_role_utilisateur';

}
