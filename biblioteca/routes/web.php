<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('home');
Route::view('/about', 'landing.about')->name('about');
Route::view('/services', 'landing.services')->name('services');
Route::view('/contact', 'landing.contact')->name('contact');
/*
Route::get('/', function () {
    $nombre = "Pepe";
    return view('inicio')->with('nombre', $nombre);
});*/

Route::get('login', function () {
    return view('Login completado.');
});

Route::get('logout', function () {
    return view('Logout completado.');
});

Route::get('catalog', function () {
    return view('Catalogo cargado.');
});

Route::get('catalog/show/{id}', function ($id) {
    return view('Bienvenido a el usuario con id: ' . $id);
});

Route::get('catalog/create', function ($id) {
    return view('Pelicula creada con exito.');
});

Route::get('catalog/edit/{id}', function ($id) {
    return view('Se ha editado la pelicula con id: ' . $id);
});

Route::get('tablaMultiplicar/{n?}', function ($n = 3) {
    $tabla = '';
    for ($i = 1; $i <= 10; $i++) {
        $tabla .= $n . ' x ' . $i . ' = ' . ($n * $i) . '<br>';
    }

    return $tabla;
})->where('n', '[0-9]+');

Route::get('listado', function () {
    $libros = array(
        array(
            "titulo" => "El juego de Ender",
            "autor" => "Orson Scott Card"
        ),
        array(
            "titulo" => "La tabla de Flandes",
            "autor" => "Arturo Pérez Reverte"
        ),
        array(
            "titulo" => "La historia interminable",
            "autor" => "Michael Ende"
        ),
        array(
            "titulo" => "El Señor de los Anillos",
            "autor" => "J.R.R. Tolkien"
        )
    );
    return view('listado', compact('libros'));
})->name('listado_libros');
