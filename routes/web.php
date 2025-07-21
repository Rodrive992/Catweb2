<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/servicios/paginas-web', function () {
    return view('proyectos.paginas_web');
});

Route::get('/servicios/tarjetas', function () {
    return view('proyectos.tarjetas');
});

Route::get('/servicios/sistemas-web', function () {
    return view('proyectos.sistemas_web');
});
