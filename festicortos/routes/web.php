<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('/corto', function () {
    return view('corto');
})->name('/corto');