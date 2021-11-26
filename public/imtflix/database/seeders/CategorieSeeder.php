<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Etape 1
        DB::table('categories')->insert([
            'id_categorie' => 1,
            'nom_categorie' => 'Romance'
           ]);
        DB::table('types')->insert([
            'id_categorie' => 2,
            'nom_categorie' => 'Comédie'
           ]);
        DB::table('types')->insert([
            'id_categorie' => 3,
            'nom_categorie' => 'Horreur'
           ]);
        DB::table('types')->insert([
            'id_categorie' => 4,
            'nom_categorie' => 'Science-Fiction'
           ]);
        DB::table('types')->insert([
            'id_categorie' => 5,
            'nom_categorie' => 'Fantastique'
           ]);
    }
}
