<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Sono io';
});

Route::get('/chi-sono', function () {
    return 'Mi presento';
});

Route::get('/contatti', function () {
    return 'form di contatti';
});

Route::get('profilo/Leysan', function () {
    return 'profilo di Leysan';
});

//Rotte parametriche

Route::get('profilo/', function () {
    return '';
});
