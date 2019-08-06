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

Route::get('/', function () {
    return view('welcome');
});
