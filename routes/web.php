<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/proyectos/paginas-web', function () {
    return view('proyectos.paginas_web');
});

Route::get('/proyectos/tarjetas', function () {
    return view('proyectos.tarjetas');
});

Route::get('/proyectos/sistemas-web', function () {
    return view('proyectos.sistemas_web');
});
