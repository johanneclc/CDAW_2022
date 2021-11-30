<?php
// PAS TESTE
// A VERIFIER

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\CategorieMedia;
use App\Models\Media;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

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

    static function extraireCategories($id_film){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://imdb-api.com/en/API/Title/k_8bo54fka/".$id_film,
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

        return json_decode($response, true)['genreList'];

    }

    static function listeFilms($json){

        foreach($json["items"] as $film){
            DB::table('medias')->insert([
                'titre' => $film["title"],
                'image' => $film["image"],
                'annee' => $film["year"],
                'id_type' => 1,
            ]);

            $id_media = Media::latest()->first()->id_media;;

            $categories = MediasSeeder::extraireCategories($film['id']);

            if (is_array($categories) || is_object($categories)){

                foreach($categories as $categorie){
                    $isExist = Categorie::select("*")
                            ->where("nom_categorie", $categorie['value'])
                            ->exists();

                    if (!$isExist) {
                        DB::table('categories')->insert([
                            'nom_categorie' => $categorie['value'],
                        ]);
                    }

                    $cat = Categorie::select("*")
                            ->where("nom_categorie", $categorie['value'])
                            ->first();

                    CategorieMedia::create([
                        'id_media'=>$id_media,
                        'id_categorie'=> $cat->id_categorie
                    ]);
                }
            }

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
