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
        DB::table('types')->insert([
            'id_type' => 1,
            'nom_type' => 'Film'
           ]);
        DB::table('types')->insert([
            'id_type' => 2,
            'nom_type' => 'Serie'
           ]);
        DB::table('types')->insert([
            'id_type' => 3,
            'nom_type' => 'Animé'
           ]);
    }
}
