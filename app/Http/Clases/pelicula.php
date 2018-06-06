<?php

namespace app\Http\Clases;

class Pelicula {
    public $arrayJson;
    public $title;
    public $poster_path;
    public $tagline;
    public $homepage;
    public $imdb_id; //'https://www.imdb.com/title/{{$arrayJson["imdb_id"]}}'
    public $overview;
    public $budget; //number_format(floatval($arrayJson["budget"]), 0))
    public $popularity;
    public $release_date;
    public $vote_average;

    public $revenue;
    public $runtime; //duracion
    public $genres;

    public function __construct(Array $arrayJson) {
        $this->arrayJson = $arrayJson;
        $this->title = $arrayJson["title"];
        $this->poster_path = 'https://image.tmdb.org/t/p/w500/' . $arrayJson["poster_path"];
        $this->homepage = $arrayJson["homepage"];
        $this->tagline = $arrayJson["tagline"];
        $this->imdb_id = 'https://www.imdb.com/title/'. $arrayJson["imdb_id"];
        $this->overview = $arrayJson["overview"];
        $this->budget = number_format(floatval($arrayJson["budget"]), 0);
        $this->popularity = $arrayJson["popularity"];
        $this->release_date = date("d-m-Y", strtotime($arrayJson["release_date"]));
        $this->vote_average = $arrayJson["vote_average"];
        $this->revenue = number_format(floatval($arrayJson["revenue"]), 0);
        $this->runtime = $arrayJson["runtime"];
        $this->getGeneros();
        $this->getTrailer();
    }

    private function getGeneros() {

        foreach ($this->arrayJson["genres"] as $genre) {
            $this->genres[] = $genre;
        }
    }

    private function getTrailer() {
        if(isset($this->arrayJson["videos"]["results"][0]["key"])) {
            $this->trailer = "https://www.youtube-nocookie.com/embed/" . $this->arrayJson["videos"]["results"][0]["key"];
        } else {
            $this->trailer = null;
        }   
    }
}