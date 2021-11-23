<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;
use App\Models\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\Media::factory(10)->create();

      //category::factory()->has(Movie::factory()->count(4))
        //->count(10)
        //->create();
      //  $this->call([
      //      CategorySeeder::class
        //]);
        // \App\Models\User::factory(10)->create();
    }
}
