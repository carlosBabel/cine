<?php

namespace App\Http\Clases;

class ApiTmdb {
    const APIKEY = "1b3c1b6299131cdc3f4fac8b871b4c8d";
    private $uri;

    public function __construct() {
        $this->uri="";
    }

    public function getCartelera() {
        $this->uri = "https://api.themoviedb.org/3/discover/movie".
        "?api_key=".self::APIKEY."&with_release_type=2|3&region=ES&primary_release_date.gte=2018-04-29".
        "&primary_release_date.lte=2018-05-29&language=es";
        
        return $this->getJson();
    }

    public function getPeliculasEspañolas() {
        $hoy = date("Y-m-d");
        $mes_anterior = date('Y-m-d', strtotime("-1 month", strtotime($hoy)));
        $this->uri = "https://api.themoviedb.org/3/discover/movie".
        "?api_key=".self::APIKEY."&with_release_type=2|3&region=ES&primary_release_date.gte=".$mes_anterior.
        "&primary_release_date.lte=".$hoy."&language=es&with_original_language=es";

        return $this->getJson();
    }

    public function getPeliculasPopulares() {
        $this->uri = "https://api.themoviedb.org/3/movie/popular".
        "?api_key=".self::APIKEY."&with_release_type=2|3&region=ES".
        "&language=es&with_original_language=es";

        return $this->getJson();
    }

    public function getBusquedaPeliculasPorNombre($pelicula) {
        $this->uri="https://api.themoviedb.org/3/search/movie".
            "?api_key=".self::APIKEY.
            "&query=".$pelicula.
            "&language=es";
        
        return $this->getJson();
    }

    public function getPeliculaPorId($id) {
        $this->uri="https://api.themoviedb.org/3/movie/".$id.
            "?api_key=".self::APIKEY.
            "&language=es&append_to_response=videos";

            $respuestaJson = file_get_contents($this->uri);

            $arrayJson = json_decode($respuestaJson,true);

            return $arrayJson;
    }

    public function getPeliculasPorGenero($id) {
        $this->uri="https://api.themoviedb.org/3/genre/".$id."/movies".
            "?api_key=".self::APIKEY.
            "&sort_by=created_at.asc&language=es";
        
        return $this->getJson();
    }

    private function getJson() {
       $respuestaJson = file_get_contents($this->uri);

       $arrayJson =  json_decode($respuestaJson,true);

       if($arrayJson["total_pages"]>0) {
           return $arrayJson;
       } else {
           return false;
       }
    }
}