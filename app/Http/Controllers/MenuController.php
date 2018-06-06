<?php

namespace App\Http\Controllers;

class MenuController extends Controller
{
    private $apiTmdb;

    public function __construct() {
        $this->apiTmdb = new \App\Http\Clases\apiTmdb;
    }

    public function cartelera() {
        $arrayJson = $this->apiTmdb->getCartelera();

        return view('welcome', compact('arrayJson'));
    }
    public function spain() {
        $arrayJson = $this->apiTmdb->getPeliculasEspañolas();

        return view('spain', compact('arrayJson'));
    }
    public function busqueda() {
        return view('busqueda');
    }
    public function popular() {
        $arrayJson = $this->apiTmdb->getPeliculasPopulares();

        return view('popular', compact('arrayJson'));
    }
    public function favoritos() {
        return view('favoritos');
    }
    public function pelicula($id) {
        $arrayJson = $this->apiTmdb->getPeliculaPorId($id);
        $pelicula = new \App\Http\Clases\Pelicula($arrayJson);
        
        return view('pelicula', compact('pelicula'));
    }
    public function genero($id) {
        $arrayJson = $this->apiTmdb->getPeliculasPorGenero($id);
        
        return view('genero', compact('arrayJson'))
        ->with('id', $id);
    }
}