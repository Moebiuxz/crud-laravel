<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Ruta sin parámetro
Route::get('prueba', function () {
    return "Hola desde routes.php";
});

// Ruta con parámetro (get)
Route::get('nombre/{nombre}', function ($nombre) {
    return "Mi nombre es: ". $nombre;
});

// Ruta con parámetro con valor por defecto (nótese el ?)
Route::get('nombre2/{nombre?}', function ($nombre = 'Alvaro') {
    return "Mi nombre es: ". $nombre;
});

Route::get('edad/{edad}', function ($edad) {
    return "Mi edad es: ". $edad;
});

// Ruta controlador
Route::get('controlador', 'PruebaController@index');
Route::get('name/{nombre}', 'PruebaController@nombre');

//Verb	Path	Action	Route Name
//GET	/photo	index	photo.index
//GET	/photo/create	create	photo.create
//POST	/photo	store	photo.store
//GET	/photo/{photo}	show	photo.show
//GET	/photo/{photo}/edit	edit	photo.edit
//PUT/PATCH	/photo/{photo}	update	photo.update
//DELETE	/photo/{photo}	destroy	photo.destroy

Route::get('/', 'FrontController@index');
Route::get('/contacto', 'FrontController@contacto');
Route::get('/reviews', 'FrontController@reviews');
Route::resource('movie', 'MovieController');


