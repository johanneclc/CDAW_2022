<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id_categorie' => 1,
            'nom_categorie' => 'Romance'
           ]);
        DB::table('categories')->insert([
            'id_categorie' => 2,
            'nom_categorie' => 'Comédie'
           ]);
        DB::table('categories')->insert([
            'id_categorie' => 3,
            'nom_categorie' => 'Horreur'
           ]);
        DB::table('categories')->insert([
            'id_categorie' => 4,
            'nom_categorie' => 'Science-Fiction'
           ]);
        DB::table('categories')->insert([
            'id_categorie' => 5,
            'nom_categorie' => 'Fantastique'
           ]);
    }
}
