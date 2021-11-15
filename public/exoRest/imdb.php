<?php

class Film{
    public function __construct($titre, $annee , $image){
        $this->titre = $titre; 
        $this->annee = $annee; 
        $this->image = $image; 
    }

    public function print_film(){
        echo "Le film est ".$this->titre." de l'année ".$this->annee."\n"; 
    }
}
 
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
 
curl_close($curl);

$json = json_decode($response, true); 

$liste_films = array(); 

foreach($json["items"] as $film){
    $nouveau_film = new Film($film["title"],$film["year"],$film["image"]);
    array_push($liste_films, $nouveau_film);
}

print_r( $liste_films); 

foreach($liste_films as $film){
    $film->print_film(); 
}


?>