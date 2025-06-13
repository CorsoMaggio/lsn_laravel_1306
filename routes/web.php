<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi_sono', function () {
    return view('Chisono');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('profilo/Leysan', function () {
    return 'profilo di Leysan';
});

//Rotte parametriche


Route::get('profilo/{nome}', function ($nome) {
    return 'Profilo di ' . $nome;
});


Route::get('/somma/{num1}/{num2}', function ($num1, $num2) {
    return $num1 + $num2;
});


Route::get('/sottract/{num3}/{num4}', function ($num3, $num4) {
    return $num3 - $num4;
});

Route::get('/welcome/{username}', function ($username) {
    return 'Welcome ' . $username;
});
