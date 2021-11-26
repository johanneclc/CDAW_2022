<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles_personne')->insert([
            'id_role_utilisateur' => 1,
            'nom_role_utilisateur' => 'Administrateur'
           ]);
        DB::table('roles_personne')->insert([
            'id_role_utilisateur' => 2,
            'nom_role_utilisateur' => 'Modérateur'
           ]);
        DB::table('roles_personne')->insert([
            'id_role_utilisateur' => 3,
            'nom_role_utilisateur' => 'Utilisateur'
           ]);
        DB::table('roles_personne')->insert([
            'id_role_utilisateur' => 4,
            'nom_role_utilisateur' => 'Bloqué'
           ]);
    }
}
