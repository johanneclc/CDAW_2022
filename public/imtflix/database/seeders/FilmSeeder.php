<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $curl = curl_init();
 
        // curl_setopt_array($curl, array(
        // CURLOPT_URL => "https://imdb-api.com/en/API/Top250Movies/k_8bo54fka",
        // CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_ENCODING => "",
        // CURLOPT_MAXREDIRS => 10,
        // CURLOPT_TIMEOUT => 0,
        // CURLOPT_FOLLOWLOCATION => true,
        // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        // CURLOPT_CUSTOMREQUEST => "GET",
        // ));
        
        // $response = curl_exec($curl);

        // echo $response;
        
        // curl_close($curl);

        // $films = json_decode($response, true); 
        // foreach($films["items"] as $film){
        //     DB::table('films')->insert([
        //         // 'duree' => $film->duree;
        //         'annee' => $film["year"];
        //         'category' => $film["year"];
        //         'chemin' => $film["year"];
        //        ]);
        // }
        


        \App\Models\Film::factory(10)->create();
        
    }
}
