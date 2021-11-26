<?php
// PAS TESTE
// A VERIFIER

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediasSeeder extends Seeder
{
    public function extraire(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://imdb-api.com/en/API/Top250Movies/k_8bo54fka",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        echo $response;

        curl_close($curl);

        return json_decode($response, true);

    }

    static function listeFilms($json){

        foreach($json["items"] as $film){
            DB::table('medias')->insert([
                'titre' => $film["title"],
                'image' => $film["image"],
                'annee' => $film["year"],

            ]);
        }
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->listeFilms($this->extraire());
    }

}
