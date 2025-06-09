<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('inicio');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/contacto', function () {
    return view('contacto');
});