<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;
use App\Models\Media;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            // CategorieSeeder::class,
            // TypeSeeder::class,
            RoleUtilisateurSeeder::class,
        ]);
    }
}
