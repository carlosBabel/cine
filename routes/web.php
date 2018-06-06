<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/españa', 'MenuController@spain');
Route::get('/busqueda', 'MenuController@busqueda');
Route::get('/favoritos', 'MenuController@favoritos');
Route::get('/popular', 'MenuController@popular');
Route::get('/cartelera', 'MenuController@cartelera');
Route::get('/', 'MenuController@cartelera');
Route::get('/pelicula/{id}', 'MenuController@pelicula');
Route::get('/genero/{id}', 'MenuController@genero');

// Route::resource('pelicula', 'PeliculaController');

Route::get("/leer", function() {
    $favoritos = \App\Favorito::all();

    foreach($favoritos as $favorito) {
        echo $favorito->idPelicula . "<br/>";
    }
});

Route::get("/insertar", function() {
    if (\App\Favorito::where('idPelicula', '=', 297762)->exists()) {
        echo "Esta película ya está en favoritos";
    } else {
        $favorito = new \App\Favorito;
        $favorito->idPelicula = 297762;
    
        $favorito->save();
    }
    
});

Route::get("/actualizar", function() {
    $favorito = \App\Favorito::find(4);
    $favorito->idPelicula = 297762;

    $favorito->save();
});

Route::get("/eliminar", function() {
    $favorito = App\Favorito::find(4);

    $favorito->delete();
});
