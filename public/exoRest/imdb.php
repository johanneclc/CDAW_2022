<?php

class Film{
    public function __construct($titre, $annee , $image){
        $this->titre = $titre; 
        $this->annee = $annee; 
        $this->image = $image; 
    }

    public function print_film_tableau(){
        echo "<tr><td> ".$this->titre."</td><td>".$this->annee."</td></tr>"; 
    }
}

class ExtractionFilms{
    static function extraire($url){
        $curl = curl_init();
 
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
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
        $liste_films = array(); 

        foreach($json["items"] as $film){
            $nouveau_film = new Film($film["title"],$film["year"],$film["image"]);
            array_push($liste_films, $nouveau_film);
        }

        return $liste_films; 
    }

    static function afficher_tableau($liste_films){
        echo "<table><thead><tr><th>Titre</th><th>Annee</th> </tr></thead><tbody>";
        foreach($liste_films as $film){
            $film->print_film_tableau(); 
        }
        echo "</tbody></table>";
    }
}
ExtractionFilms::afficher_tableau(ExtractionFilms::listeFilms(ExtractionFilms::extraire("https://imdb-api.com/en/API/Top250Movies/k_8bo54fka")));
?>